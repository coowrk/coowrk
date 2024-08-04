<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\Customer;
use App\Models\ShortLetter;
use Illuminate\Support\Arr;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    // properties
    #[Validate(['required', 'in:Herr,Frau,Divers,Firma'])]
    public $salutation;

    #[Validate(['required', 'min:2', 'max:255'])]
    public $first_name;

    #[Validate(['max:255', 'required_if:salutation,Herr,Frau,Divers'])]
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
        return view('pages.auth.short-letter.create');
    }

    // create
    public function create()
    {
        // validate input data
        $validated = $this->validate();

        // create customer if doesn't exist
        $customer = Customer::firstOrCreate(
            Arr::except($validated, [
                'options',
                'reason'
            ])
        );

        // create short letter
        $short_letter = ShortLetter::create(
            Arr::collapse(
                [
                    $validated,
                    ['customer_id' => $customer->id],
                    ['user_id' => auth()->user()->id]
                ],
            )
        );

        // redirect to entry
        return $this->redirect(route('shortletter.show', $short_letter->id));
    }

    // fetch user data
    #[On('set.short-letter.user-data')]
    public function setShortLetterUserData($customer_id)
    {
        $customer = Customer::find($customer_id);

        $this->salutation = $customer->salutation;
        $this->first_name = $customer->first_name;
        $this->last_name = $customer->last_name;
        $this->street = $customer->street;
        $this->house_number = $customer->house_number;
        $this->postcode = $customer->postcode;
        $this->city = $customer->city;
        $this->country = $customer->country;
    }
}