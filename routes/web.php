<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::view('/', 'welcome');

Route::view('/lol', 'startpage');

Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('locale');

/**  Pages  **/
Route::get('/pages', [PageController::class, 'index'])->name('pages.index');

Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');

Route::get('/pages/{id}/edit', [PageController::class, 'edit'])->name('pages.edit');

Route::get('/pages/{id}/delete', [PageController::class, 'delete'])->name('pages.delete');

/**  Templates  **/
Route::get('templates', [TemplateController::class, 'index'])->name('templates.index');

Route::get('templates/create', [TemplateController::class, 'create'])->name('templates.create');

Route::get('/templates/{id}/edit', [TemplateController::class, 'edit'])->name('templates.edit');

Route::get('/templates/{id}/delete', [TemplateController::class, 'delete'])->name('templates.delete');

/**  Media  **/
Route::get('media', [MediaController::class, 'index'])->name('media.index');

Route::get('/media/{id}/edit', [MediaController::class, 'edit'])->name('files.edit');
Route::get('/media/{id}/delete', [MediaController::class, 'delete'])->name('files.delete');

/**  Admin  **/
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
