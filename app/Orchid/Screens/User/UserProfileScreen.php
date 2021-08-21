<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Orchid\Layouts\User\ProfilePasswordLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class UserProfileScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Profil';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Buradan profil bilgilerinizi değiştirebilirsiniz.';

    /**
     * Query data.
     *
     * @param Request $request
     *
     * @return array
     */
    public function query(Request $request): array
    {
        return [
            'user' => $request->user(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array{
        return [
            Layout::block(UserEditLayout::class)
                ->title(__('Profil Bilgileri'))
                ->description(__("Kullanıcı adı ve E-Postayı buradan değiştirebilirsiniz."))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->method('save')
                ),

            Layout::block(ProfilePasswordLayout::class)
                ->title(__('Şifre Güncelle'))
                ->description(__('Şifrenizi güvenli ve uzun oluşturun. Bu sitenizi güvende tutmaya yarar.'))
                ->commands(
                    Button::make(__('Şifreyi Güncelle'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->method('changePassword')
                ),
        ];
    }

    /**
     * @param Request $request
     */
    public function save(Request $request): void
    {
        $request->validate([
            'user.name'  => 'required|string',
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($request->user()),
            ],
        ]);

        $request->user()
            ->fill($request->get('user'))
            ->save();

        Toast::info(__('Profile updated.'));
    }

    /**
     * @param Request $request
     */
    public function changePassword(Request $request): void
    {
        $request->validate([
            'old_password' => 'required|password:web',
            'password'     => 'required|confirmed',
        ]);

        tap($request->user(), function ($user) use ($request) {
            $user->password = Hash::make($request->get('password'));
        })->save();

        Toast::info(__('Password changed.'));
    }
}
