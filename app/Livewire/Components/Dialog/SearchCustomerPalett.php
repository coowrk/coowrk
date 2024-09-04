<?php

namespace App\Livewire\Components\Dialog;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class SearchCustomerPalett extends Component
{
    // properties
    public $show = false;

    public $search;

    public Collection $customers;

    // render html
    public function render()
    {
        return view('components.dialog.search-customer-palett');
    }

    // fetch data
    public function searchCustomer()
    {
        if (strlen($this->search) == 0)
            if (!empty($this->customers))
                unset($this->customers);

        if (strlen($this->search) <= 1)
            return;

        $this->customers = Customer::query()
            ->where('first_name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('last_name', 'LIKE', '%' . $this->search . '%')
            ->select(['id', 'first_name', 'last_name', 'salutation', 'street', 'house_number', 'postcode', 'city'])
            ->get();
    }

    // send customer data to create controller
    public function sendCustomerDataToResource($customer_id)
    {
        $this->reset();
        $this->dispatch('set.customer-data', customer_id: $customer_id);
    }

    // visibility state event
    #[On('change.search-customer-palett.visibility.state')]
    public function changeSearchCustomerPalettVisibilityState()
    {
        $this->show = true;
    }
}
