<?php

use App\Http\Controllers\TurbineController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

// Standard Routes
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/data', [TurbineController::class, 'index'])->name('data');

// Livewire Routes
Route::get('/contact', \App\Livewire\Contacts\Create::class)
    ->name('contact');

// Admin Routes
Route::view('admin', 'admin')
    ->middleware(['auth', 'verified', EnsureUserIsAdmin::class])
    ->name('admin');

Route::get('/admin/contact', \App\Livewire\Admin\Contacts\Index::class)
    ->middleware((['auth', 'verified', EnsureUserIsAdmin::class]))
    ->name('admin.contact.index');
Route::get('/admin/contact/{contact}', \App\Livewire\Admin\Contacts\Show::class)
    ->middleware((['auth', 'verified', EnsureUserIsAdmin::class]))
    ->name('admin.contact.show');

Route::get('/admin/users', \App\Livewire\Admin\Users\Index::class)
    ->middleware((['auth', 'verified', EnsureUserIsAdmin::class]))
    ->name('admin.users.index');

Route::get('/admin/users/create', \App\Livewire\Admin\Users\Create::class)
    // ->middleware(['auth', 'verified', EnsureUserIsAdmin::class])
    ->name('admin.users.create');

Route::get('/admin/users/{user}', \App\Livewire\Admin\Users\Show::class)
    ->middleware((['auth', 'verified', EnsureUserIsAdmin::class]))
    ->name('admin.users.show');

Route::get('/admin/users/update/{user}', \App\Livewire\Admin\Users\Edit::class)
    ->middleware((['auth', 'verified', EnsureUserIsAdmin::class]))
    ->name('admin.users.edit');

require __DIR__ . '/auth.php';
