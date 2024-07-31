<?php

use Illuminate\Support\Facades\Route;

// guest routes
Route::middleware(['guest'])
    ->group(function () {
        // authentication routes
        Route::group([
            'prefix' => 'authentication',
            'as' => 'authentication.'
        ], function () {
            // login
            Route::get('sign-in', App\Livewire\Pages\Guest\Authentication\SignIn::class)->name('login');
        });
    });

// auth routes
Route::middleware(['auth'])
    ->group(function () {
        Route::get('home', App\Livewire\Pages\Auth\Home::class)->name('home');
    });
