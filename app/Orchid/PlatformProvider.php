<?php

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array{
        return [
            Menu::make('Gösterge Paneli')->icon('speedometer')->route('platform.main')->title('Genel'),

            Menu::make('Yazılar')->icon('pencil')->route('platform.post.list')->title('İçerik'),
            Menu::make('Kategoriler')->icon('list')->route('platform.category.list'),
            Menu::make('Sayfalar')->icon('grid')->route('platform.page.list'),
            Menu::make('Ayarlar')->icon('settings')->route('platform.setting')
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array{
        return [
            Menu::make('Profil')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }

    /**
     * @return string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\Models\User::class
        ];
    }
}
