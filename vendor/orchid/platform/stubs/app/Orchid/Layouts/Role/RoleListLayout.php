<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Role;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class RoleListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'roles';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', __('Name'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Role $role) {
                    return Link::make($role->name)
                        ->route('platform.systems.roles.edit', $role->id);
                }),

            TD::make('slug', __('Slug'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT),

            TD::make('created_at', __('Created'))
                ->sort()
                ->render(function (Role $role) {
                    return $role->created_at->toDateTimeString();
                }),
        ];
    }
}
