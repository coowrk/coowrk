<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\LaravelPdf\Facades\Pdf;

class Create extends Component
{
    // properties
    #[Validate(['required'])]
    public $first_name;

    #[Validate(['required'])]
    public $last_name;

    #[Validate(['required'])]
    public $street;

    #[Validate(['required'])]
    public $house_number;

    #[Validate(['required'])]
    public $postcode;

    #[Validate(['required'])]
    public $country;

    #[Validate(['required'])]
    public $reason;

    #[Validate(['required'])]
    public $options = [];

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.short-letter.create');
    }

    // create
    public function create()
    {
        // dd(Pdf::view('pdf.shortletter')->save(storage_path('app/public/pdf/') . 'test.pdf'));
        return Pdf::view('pdf.shortletter')->name('invoice-2023-04-10.pdf')
            ->download();
    }
}
