<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Dogs\Index;
use App\Livewire\Pages\Home;

// 🏠 Public Landing Page (welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
})->middleware('guest')->name('welcome');

// 🏡 Authenticated Home/Dashboard (Livewire component)
Route::get('/home', Home::class)
    ->middleware(['auth', 'verified'])
    ->name('home');

// 🐶 Dog listing page
Route::get('/dogs', Index::class)->name('dogs');

// 📄 Static Pages
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// 🛠 Settings & Dashboard
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::redirect('/settings', '/settings/profile');
    Volt::route('/settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('/settings/password', 'settings.password')->name('settings.password');
    Volt::route('/settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
