<?php

use Illuminate\Support\Facades\Route;

// guest
Route::group(['middelware:guest'], function () {
    Route::group([
        'prefix' => 'authentication',
        'as' => 'authentication.'
    ], function () {
        Route::get('sign-in', App\Livewire\Pages\Guest\Authentication\SignIn::class)->name('login');
    });
});
