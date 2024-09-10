<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Livewire\Forms\CustomerForm;
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
    public CustomerForm $customer;

    #[Validate(['required', 'min:1', 'max:255'])]
    public $reason;

    #[Validate([
        'required',
        'array',
        'in:anruf-ruecksprache,rueckgabe,kenntnisnahme,bericht,erledigung,weitere-veranlassung,stellungnahme,pruefung,zur-unterschrift,zum-verbleib,zur-weitergabe,zur-vorlage,mit-dank-zurueck,anbei-anlagen',
    ])]
    public $options = [];

    // render html
    #[Layout('components.layout.page.auth.default')]
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

        // create short letter feed
        $short_letter
            ->feed()
            ->create([
                'user_id' => auth()->user()->id,
                'title' => 'pages/auth/short-letter.feed.creation'
            ]);

        // redirect to entry
        return $this->redirect(route('service-tool.short-letter.show', $short_letter->id));
    }

    // fetch user data
    #[On('set.customer-data')]
    public function setCustomerData($customer_id)
    {
        // fetch user data
        $customer = Customer::find($customer_id);

        // set user data
        $this->customer->salutation = $customer->salutation;
        $this->customer->first_name = $customer->first_name;
        $this->customer->last_name = $customer->last_name;
        $this->customer->street = $customer->street;
        $this->customer->house_number = $customer->house_number;
        $this->customer->postcode = $customer->postcode;
        $this->customer->city = $customer->city;
        $this->customer->country = $customer->country;
    }
}
