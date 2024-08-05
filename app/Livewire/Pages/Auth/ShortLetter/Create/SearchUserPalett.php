<?php

namespace App\Livewire\Pages\Auth\ShortLetter\Create;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class SearchUserPalett extends Component
{
    // properties
    public $show = false;

    public $search;

    public Collection $customers;

    // render html
    public function render()
    {
        return view('pages.auth.short-letter.create.search-user-palett');
    }

    // fetch data
    public function searchUser()
    {
        if (strlen($this->search) == 0)
            if (!empty($this->customers))
                unset($this->customers);

        if (strlen($this->search) <= 1)
            return;

        $this->customers = Customer::query()
            ->where('first_name', 'LIKE', '%' . $this->search . '%')
            ->select(['id', 'first_name', 'last_name', 'salutation', 'street', 'house_number', 'postcode', 'city'])
            ->get();
    }

    // send user data to create controller
    public function sendShortLetterUserData($customer_id)
    {
        $this->reset();
        $this->dispatch('set.short-letter.user-data', customer_id: $customer_id);
    }

    // visibility state event
    #[On('change.short-letter.search-user-palett.visibility.state')]
    public function changeShortLetterSearchUserPalettVisibilityState()
    {
        $this->show = true;
    }
}
