<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use App\Models\Customer;
use App\Models\Letter;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LetterCreate extends Component
{
    #[Validate('required|max:128')]
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
    public string $country;

    #[Validate('required|max:128')]
    public string $topic;

    #[Validate('required|max:128')]
    public string $description;

    public function render()
    {
        return view('components.livewire.pages.auth.letter-protocol.letter-create');
    }

    public function create()
    {
        $this->validate();

        Letter::create([
            'topic' => $this->topic,
            'description' => $this->description,
            'customer_id' => Customer::query()
                ->firstOrCreate(
                    // Search & create attributes
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
        ]);
    }
}
