<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('sayfa/{slug}', [App\Http\Controllers\PageController::class, 'show'])->name('page.show');
Route::get('arama', [App\Http\Controllers\SearchController::class, 'index'])->name('search.index');
Route::get('{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::get('{cat}/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
