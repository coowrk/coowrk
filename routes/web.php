<?php

use App\Filament\App\Resources\ServiceTool\ShortLetterResource\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
