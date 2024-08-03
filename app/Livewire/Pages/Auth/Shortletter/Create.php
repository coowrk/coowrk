<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\Customer;
use Illuminate\Support\Arr;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\LaravelPdf\Facades\Pdf;

class Create extends Component
{
    // properties
    #[Validate(['required', 'in:0,1,2,3'])]
    public $salutation;

    #[Validate(['required', 'min:2', 'max:255'])]
    public $first_name;

    #[Validate(['nullable', 'min:2', 'max:255'])]
    public $last_name;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $street;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $house_number;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $postcode;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $country;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $reason;

    #[Validate(['required', 'array', 'in:rueckruf,schadenanzeige,zum-verbleib'])]
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
        // validate input data
        // create customer if doesn't exist
        Customer::firstOrCreate(
            Arr::only($this->validate(), [
                'salutation',
                'first_name',
                'last_name',
                'street',
                'house_number',
                'postcode',
                'country'
            ])
        );


        // dd(Pdf::view('pdf.shortletter')->save(storage_path('app/public/pdf/') . 'test.pdf'));
        // return Pdf::view('pdf.shortletter')->name('invoice-2023-04-10.pdf')
        //     ->download();
    }
}
