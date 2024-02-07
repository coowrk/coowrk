<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use App\Models\Letter;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LetterEdit extends Component
{
    public Letter $letter;

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

    public function render()
    {
        return view('livewire.pages.auth.letter-protocol.letter-edit');
    }

    public function mount()
    {
        $this->salutation = $this->letter->salutation;
        $this->first_name = $this->letter->first_name;
        $this->last_name = $this->letter->last_name;
        $this->street = $this->letter->street;
        $this->street_number = $this->letter->street_number;
        $this->postalcode = $this->letter->postalcode;
        $this->city = $this->letter->city;
        $this->country = $this->letter->country;
        $this->topic = $this->letter->topic;
        $this->description = $this->letter->description;
        $this->checked = $this->letter->checked;
    }
}
