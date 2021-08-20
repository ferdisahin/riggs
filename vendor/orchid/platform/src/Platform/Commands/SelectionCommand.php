<?php

declare(strict_types=1);

namespace Orchid\Platform\Commands;

use Illuminate\Console\GeneratorCommand;
use Orchid\Platform\Dashboard;

class SelectionCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'orchid:selection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new selection layout class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Selection';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return Dashboard::path('stubs/selection.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Orchid\Layouts';
    }
}
