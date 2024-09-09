<?php

use Illuminate\Support\Facades\Route;

// guest routes
Route::middleware(['guest'])
    ->group(function () {
        // login redirect
        Route::permanentRedirect('/login', '/authentication/sign-in')->name('login');

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
        // home
        Route::get('home', App\Livewire\Pages\Auth\Home::class)->name('home');

        // user
        Route::prefix('user')
            ->as('user.')
            ->group(function () {

                // my profile
                Route::prefix('my-profile')
                    ->as('my-profile.')
                    ->group(function () {
                        Route::get('general', App\Livewire\Pages\Auth\User\MyProfile\General::class)->name('general');
                        Route::get('security', App\Livewire\Pages\Auth\User\MyProfile\Security::class)->name('security');
                    });
            });
    });
