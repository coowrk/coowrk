<?php

namespace App\Livewire\Pages\Auth\ShortLetter\Create;

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
        return view('pages.auth.short-letter.create.search-customer-palett');
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
    public function sendShortLetterCustomerData($customer_id)
    {
        $this->reset();
        $this->dispatch('set.short-letter.customer-data', customer_id: $customer_id);
    }

    // visibility state event
    #[On('change.short-letter.search-customer-palett.visibility.state')]
    public function changeShortLetterSearchCustomerPalettVisibilityState()
    {
        $this->show = true;
    }
}
