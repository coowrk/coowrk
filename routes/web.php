<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});


Route::get('/test', function () {
    $customer = App\Models\Customer::find(1);
    return Pdf::loadView('pdf.broker-authority', [
        'customer' => json_encode($customer),
    ])
        ->stream('maklervollmacht.pdf');
});
