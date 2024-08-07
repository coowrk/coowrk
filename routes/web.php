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

        // shortletter
        Route::prefix('shortletter')
            ->as('short-letter.')
            ->group(function () {
                Route::get('/', App\Livewire\Pages\Auth\ShortLetter\Index::class)->name('index');
                Route::get('create', App\Livewire\Pages\Auth\ShortLetter\Create::class)->name('create');
                Route::get('/{id}', App\Livewire\Pages\Auth\ShortLetter\Show::class)->where('id', '[0-9]+')->name('show');
                Route::get('/{id}/edit', App\Livewire\Pages\Auth\ShortLetter\Edit::class)->where('id', '[0-9]+')->name('edit');
                Route::get('/{id}/pdf', App\Livewire\Pages\Auth\ShortLetter\Pdf::class)->where('id', '[0-9]+')->name('pdf');
            });
    });
