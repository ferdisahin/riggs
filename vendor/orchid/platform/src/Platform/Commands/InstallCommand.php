<?php

declare(strict_types=1);

namespace Orchid\Platform\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Orchid\Platform\Dashboard;
use Orchid\Platform\Events\InstallEvent;
use Orchid\Platform\Providers\FoundationServiceProvider;

class InstallCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'orchid:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish files for ORCHID and install package';

    /**
     * Execute the console command.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function handle(Dashboard $dashboard)
    {
        $this->info('Installation started. Please wait...');
        $this->info('Version: ' . Dashboard::VERSION);

        $this
            ->executeCommand('vendor:publish', [
                '--provider' => FoundationServiceProvider::class,
                '--force'    => true,
                '--tag'      => [
                    'config',
                    'migrations',
                    'orchid-stubs',
                ],
            ])
            ->executeCommand('migrate')
            ->executeCommand('storage:link')
            ->changeUserModel()
            ->setValueEnv('SCOUT_DRIVER')
            ->showMeLove();

        $this->info('Completed!');
        $this->comment("To create a user, run 'artisan orchid:admin'");
        $this->line("To start the embedded server, run 'artisan serve'");

        event(new InstallEvent($this));
    }

    /**
     * @param string $command
     * @param array  $parameters
     *
     * @return $this
     */
    private function executeCommand(string $command, array $parameters = []): self
    {
        try {
            $result = $this->call($command, $parameters);
        } catch (\Exception $exception) {
            $result = 1;
            $this->alert($exception->getMessage());
        }

        if ($result) {
            $parameters = http_build_query($parameters, '', ' ');
            $parameters = str_replace('%5C', '/', $parameters);
            $this->alert("An error has occurred. The '{$command} {$parameters}' command was not executed");
        }

        return $this;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    private function changeUserModel(string $path = 'Models/User.php'):self
    {
        $this->info('Attempting to set ORCHID User model as parent to App\User');

        if (! file_exists(app_path($path))) {
            $this->warn('Unable to locate "app/Models/User.php".  Did you move this file?');
            $this->warn('You will need to update this manually.');
            $this->warn('Change "extends Authenticatable" to "extends \Orchid\Platform\Models\User" in your User model');
            $this->warn('Also pay attention to the properties so that they are not overwritten.');

            return $this;
        }

        $user = file_get_contents(Dashboard::path('stubs/app/User.stub'));
        file_put_contents(app_path($path), $user);

        return $this;
    }

    /**
     * @param string $constant
     * @param string $value
     *
     * @return InstallCommand
     */
    private function setValueEnv(string $constant, string $value = 'null'): self
    {
        $str = $this->fileGetContent(app_path('../.env'));

        if ($str !== false && strpos($str, $constant) === false) {
            file_put_contents(app_path('../.env'), $str . PHP_EOL . $constant . '=' . $value . PHP_EOL);
        }

        return $this;
    }

    /**
     * @param string $file
     *
     * @return false|string
     */
    private function fileGetContent(string $file)
    {
        if (! is_file($file)) {
            return '';
        }

        return file_get_contents($file);
    }

    /**
     * @return $this
     */
    private function showMeLove(): self
    {
        if (App::runningUnitTests() || ! $this->confirm('Would you like to show a little love by starting with ⭐')) {
            return $this;
        }

        $repo = 'https://github.com/orchidsoftware/platform';

        switch (PHP_OS_FAMILY) {
            case 'Darwin':
                exec('open ' . $repo);
                break;
            case 'Windows':
                exec('start ' . $repo);
                break;
            case 'Linux':
                exec('xdg-open ' . $repo);
                break;
            default:
                $this->line("You can find us at " . $repo);
        }

        $this->line("Thank you! It means a lot to us! 🙏");

        return $this;
    }
}
