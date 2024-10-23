<?php

use Illuminate\Support\Facades\Route;

// Onboarding
Route::view('/', 'routes.onboarding.welcome')->name('landingpage');

Route::view('/login', 'routes.onboarding.welcome')->name('login');
