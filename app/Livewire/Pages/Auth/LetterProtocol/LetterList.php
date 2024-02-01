<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use Livewire\Attributes\Url;
use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class LetterList extends Component
{
    public Collection|Builder $letters;

    #[Url]
    public string $search = '';

    #[Url]
    public string $sort = '';

    /**
     * Rendering the view
     * 
     * @return View
     */
    public function render(): View
    {
        return view('components.livewire.pages.auth.letter-protocol.letter-list');
    }

    /**
     * Mounting the data.
     * 
     * @return Collection|Builder
     */
    public function mount(): Collection|Builder
    {
        if ($this->search || $this->sort)
            return $this->searchLetters();

        return $this->letters = Letter::query()
            ->with('customer:id,first_name,last_name,full_name')
            ->take(10)
            ->latest()
            ->get();
    }

    /**
     * Updating the query.
     * 
     * @return Collection|Builder
     */
    public function searchLetters(): Collection|Builder
    {
        $data = Letter::query()
            ->take(10)
            ->with('customer:id,first_name,last_name,full_name');

        if ($this->search)
            $data->whereHas('customer', function ($query) {
                $query->where('full_name', 'LIKE', '%' . $this->search . '%');
            });

        if ($this->sort == 'ascending')
            $data->latest();

        if ($this->sort == 'descending')
            $data->oldest();

        return $this->letters = $data->get();
    }
}
