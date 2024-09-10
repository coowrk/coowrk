<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerForm extends Form
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
    public $country = 'Deutschland';

    public $available_salutations = [
        'Herr' => 'Herr',
        'Frau' => 'Frau',
        'Divers' => 'Divers',
        'Firma' => 'Firma',
    ];
}
