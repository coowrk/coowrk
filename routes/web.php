<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});


Route::get('/test', function () {
    $customerAll = App\Models\Customer::all();

    foreach ($customerAll as $customer) {
        Pdf::loadView('pdf.broker-authority', [
            'customer' => json_encode($customer),
        ])
            ->save('maklervollmacht/' . $customer->full_name . '.pdf');
    }
});
