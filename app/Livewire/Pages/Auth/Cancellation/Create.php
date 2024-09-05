<?php

namespace App\Livewire\Pages\Auth\Cancellation;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    // properties
    // ? start properties of sender
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

    // ! end properties of sender

    // company
    #[Validate(['required'])]
    public $company;

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.cancellation.create');
    }

    // fetch user data
    #[On('set.customer-data')]
    public function customerData($customer_id)
    {
        // compan
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

    // fetch company data
    #[On('set.company-data')]
    public function companyData($company_id)
    {
        // company
        $this->company = Company::find($company_id);
    }
}
