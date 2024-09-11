<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// guest routes
Route::middleware(['guest'])
    ->group(function () {
        // login redirect
        Route::permanentRedirect('/login', '/authentication/sign-in')->name('login');

        // authentication routes
        Route::group([
            'prefix' => 'authentication',
            'as' => 'authentication.'
        ], function () {});
    });
