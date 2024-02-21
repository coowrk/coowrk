<?php

namespace App\Livewire\Pages\Auth\Database\Customer;

use App\Models\Customer;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public const lettersPerPage = 10;

    #[Url]
    public string $search = '';

    /**
     * Rendering the view
     * 
     * @return View
     */
    public function render()
    {
        return view('livewire.pages.auth.database.customer.index', [
            'customers' => Customer::query()
                ->select(['id', 'salutation', 'full_name', 'street', 'street_number', 'postalcode', 'city', 'country', 'created_at', 'created_by'])
                ->where(function ($query) {
                    $query->orWhere('full_name', 'LIKE', '%' . $this->search . '%');
                    $query->orWhere('street', 'LIKE', '%' . $this->search . '%');
                    $query->orWhere('city', 'LIKE', '%' . $this->search . '%');
                    $query->orWhere('country', 'LIKE', '%' . $this->search . '%');
                })
                ->with('created_by_user')
                ->latest()
                ->paginate(self::lettersPerPage)
        ]);
    }

    /**
     * Rendering the view
     * 
     * @return void
     */
    public function searchCustomers(): void
    {
        $this->resetPage();
    }
}
