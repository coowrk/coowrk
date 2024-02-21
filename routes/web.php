<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::view('login', 'pages.guest.login')->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::view('home', 'pages.auth.home')->name('home');

    // Profil
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        // Settings redirect
        Route::redirect('/settings/', '/profile/settings/general')->name('settings');

        // Settings
        Route::group(["prefix" => "settings", "as" => "settings."], function () {
            Route::view('general', 'pages.auth.profile.settings.general')->name('general');
            Route::view('security', 'pages.auth.profile.settings.security')->name('security');
            Route::view('appereance', 'pages.auth.profile.settings.appereance')->name('appereance');
        });
    });

    // Datenbanken
    Route::group(["prefix" => "database", "as" => "database."], function () {
        Route::resource('customer', \App\Http\Controllers\Pages\Auth\Databases\CustomerController::class);
    });
});
