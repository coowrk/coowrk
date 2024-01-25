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

// Guest Routes
Route::group(['middleware' => 'guest'], function () {
    // Login
    Route::get('login', \App\Http\Controllers\Guest\LoginController::class)->name('login');
    Route::redirect('', 'login');
});

// Auth Routes
Route::group(['middleware' => 'auth'], function () {
    // Home
    Route::get('/home', function () {
        return view('pages.auth.index');
    })->name('home');
});
