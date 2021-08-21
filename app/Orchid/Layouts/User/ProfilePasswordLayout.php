<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Layouts\Rows;

class ProfilePasswordLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Password::make('old_password')->placeholder(__('Şu anki şifrenizi girin'))->title(__('Geçerli Şifre')),
            Password::make('password')->placeholder(__('Yeni şifrenizi girin'))->title(__('Yeni Şifre')),
            Password::make('password_confirmation')->placeholder(__('Yeni şifre tekrarını girin'))->title(__('Yeni Şifre Tekrarı'))
        ];
    }
}
