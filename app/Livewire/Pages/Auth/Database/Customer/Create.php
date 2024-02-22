<?php

namespace App\Livewire\Pages\Auth\Database\Customer;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;

class Create extends Component
{
    public CustomerForm $customer;

    public function render()
    {
        return view('livewire.pages.auth.database.customer.create');
    }
}
