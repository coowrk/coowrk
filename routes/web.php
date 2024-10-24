<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Routes\Authentication;

// Onboarding
Route::view('/', 'routes.onboarding.welcome')->name('landingpage');

Route::middleware('guest')
    ->group(function () {
        Route::get('/login', Authentication\Login::class)->name('login');
        Route::get('/signup', Authentication\Signup::class)->name('signup');
    });
