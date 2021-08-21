<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PlatformScreen extends Screen{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Yönetici Paneli';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Yönetici paneline hoşgeldiniz.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('GitHub')
                ->href('https://github.com/ferdisahin/riggs')
                ->icon('social-github'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::view('admin.welcome'),
        ];
    }
}
