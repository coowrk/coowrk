<?php

use Illuminate\Support\Facades\Route;

// Onboarding
Route::view('/', 'routes.onboarding.welcome');

Route::view('/login', 'routes.onboarding.welcome')->name('login');
