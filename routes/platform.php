<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

Route::screen('yazi/{yazi?}', \App\Orchid\Screens\PostEditScreen::class)->name('platform.post.edit');
Route::screen('yazilar', \App\Orchid\Screens\PostListScreen::class)->name('platform.post.list');

Route::screen('kategori/{kategori?}', \App\Orchid\Screens\CategoryEditScreen::class)->name('platform.category.edit');
Route::screen('kategoriler', \App\Orchid\Screens\CategoryListScreen::class)->name('platform.category.list');

Route::screen('sayfa/{sayfa?}', \App\Orchid\Screens\PageEditScreen::class)->name('platform.page.edit');
Route::screen('sayfalar', \App\Orchid\Screens\PageListScreen::class)->name('platform.page.list');

Route::screen('ayarlar', \App\Orchid\Screens\SettingScreen::class)->name('platform.setting');
