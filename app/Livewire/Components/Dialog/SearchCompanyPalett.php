<?php

namespace App\Livewire\Components\Dialog;

use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class SearchCompanyPalett extends Component
{
    // properties
    public $show = false;

    public $search;

    public Collection $companies;

    // render html
    public function render()
    {
        return view('components.dialog.search-company-palett');
    }

    // fetch data
    public function searchCompany()
    {
        if (strlen($this->search) == 0)
            if (!empty($this->companies))
                unset($this->companies);

        if (strlen($this->search) <= 1)
            return;

        $this->companies = Company::query()
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('postcode', 'LIKE', '%' . $this->search . '%')
            ->orWhere('city', 'LIKE', '%' . $this->search . '%')
            ->select(['id', 'name', 'street', 'house_number', 'postcode', 'city', 'country'])
            ->get();
    }

    // send company data to create controller
    public function sendCompanyDataToRessource($company_id)
    {
        $this->reset();
        $this->dispatch('set.company-data', company_id: $company_id);
    }

    // visibility state event
    #[On('change.search-company-palett.visibility.state')]
    public function changeSearchCompanyPalettVisibilityState()
    {
        $this->show = true;
    }
}
