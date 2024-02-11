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
    Route::view('home', 'pages.auth.home')->name('home');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::view('settings', 'pages.auth.profile.settings')->name('settings');
    });
});
