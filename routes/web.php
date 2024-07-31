<?php

use Illuminate\Support\Facades\Route;

// guest
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
