<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\Customer;
use App\Models\ShortLetter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    // properties
    #[Url()]
    public $id;

    public ShortLetter $short_letter;
    public Customer $customer;

    #[Validate(['required', 'in:Herr,Frau,Divers,Firma'])]
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
    public $city;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $country;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $reason;

    #[Validate(['required', 'array', 'in:rueckruf,erledigung,pruefung,kenntnisnahme,stellungnahme,rueckgabe,zum-verbleib,zur-weitergabe,zur-unterschrift,anbei-anlagen'])]
    public $options = [];

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.short-letter.edit');
    }

    // fetch data
    public function mount()
    {
        // set short letter
        $this->short_letter = ShortLetter::findOrFail($this->id);

        // set customer and user data
        $this->customer = Customer::find($this->short_letter->customer_id);

        // set short letter properties
        $this->salutation = $this->short_letter->salutation;
        $this->first_name = $this->short_letter->first_name;
        $this->last_name = $this->short_letter->last_name;
        $this->street = $this->short_letter->street;
        $this->house_number = $this->short_letter->house_number;
        $this->postcode = $this->short_letter->postcode;
        $this->city = $this->short_letter->city;
        $this->country = $this->short_letter->country;
        $this->reason = $this->short_letter->reason;
        $this->options = $this->short_letter->options;
    }

    // edit
    public function edit()
    {
        // validate input data
        $validated = $this->validate();

        // update short letter
        $this->short_letter->update($validated);

        // redirect to entry
        return $this->redirect(route('shortletter.show', $this->short_letter->id));
    }
}
