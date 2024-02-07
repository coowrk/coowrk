<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use App\Models\Customer;
use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LetterCreate extends Component
{
    /**
     * Form attributes.
     */
    #[Validate('required|in:Firma,Herr,Frau|max:128')]
    public string $salutation;

    #[Validate('required|max:128')]
    public string $first_name;

    #[Validate('required|max:128')]
    public string $last_name;

    #[Validate('required|max:128')]
    public string $street;

    #[Validate('required|max:128')]
    public string $street_number;

    #[Validate('required|max:128')]
    public string $postalcode;

    #[Validate('required|max:128')]
    public string $city;

    #[Validate('required|max:128')]
    public string $country = "Deutschland";

    #[Validate('required|max:128')]
    public string $topic;

    #[Validate('required|max:256')]
    public string $description;

    #[Validate('array|in:wiedervorlage,prufung,unterschrift,verbleib')]
    public array $checked;

    /**
     * Modal attributes.
     */
    public array $modal = [
        'show' => false,
        'search' => '',
        'customers' => [],
    ];

    /**
     * Rendering the view
     * 
     * @return View
     */
    public function render(): View
    {
        return view('livewire.pages.auth.letter-protocol.letter-create');
    }

    /**
     * Creating a letter.
     * 
     * @return void
     */
    public function create(): void
    {
        // Validate attributes.
        $this->validate();

        // Create letter.
        Letter::create([
            'topic' => $this->topic,
            'description' => $this->description,
            'checked' => $this->checked,
            'salutation' => $this->salutation,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'street' => $this->street,
            'street_number' => $this->street_number,
            'postalcode' => $this->postalcode,
            'city' => $this->city,
            'country' => $this->country,

            // Find or create Customer.
            'customer_id' => Customer::firstOrCreate(
                [
                    'salutation' => $this->salutation,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'street' => $this->street,
                    'street_number' => $this->street_number,
                    'postalcode' => $this->postalcode,
                    'city' => $this->city,
                    'country' => $this->country
                ]
            )->id
        ])
            // Create feed.
            ->feed()
            ->create([
                'user_id' => auth()->user()->id,
                'keyword' => 'created'
            ]);

        // Redirect back to letter-protocol.index route.
        $this->redirect(route('letter-protocol.index'));
    }

    /**
     * Get customers from modal search input.
     * 
     * @return void
     */
    public function modalSearch(): void
    {
        $this->modal["customers"] = [];

        if (strlen($this->modal["search"]) == 0)
            if (!empty($this->modal["customers"]))
                $this->modal["customers"] = [];

        if (strlen($this->modal["search"]) <= 2)
            return;

        $this->modal["customers"] = Customer::query()
            ->where('full_name', 'LIKE', '%' . $this->modal["search"] . '%')
            ->select('salutation', 'first_name', 'last_name', 'street', 'street_number', 'city', 'postalcode', 'country')
            ->latest()
            ->get()
            ->toArray();
    }

    /**
     * Mount customer data from modal result.
     * 
     * @return void
     */
    public function loadCustomerData(array $customer): void
    {
        // Close modal
        $this->modal['show'] = false;

        // Mount data
        $this->salutation = $customer['salutation'];
        $this->first_name = $customer['first_name'];
        $this->last_name = $customer['last_name'];
        $this->street = $customer['street'];
        $this->street_number = $customer['street_number'];
        $this->city = $customer['city'];
        $this->postalcode = $customer['postalcode'];
        $this->country = $customer['country'];
    }
}
