<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // properties
    #[Url()]
    public $page;

    #[Url()]
    public $search;

    #[Url()]
    public $search_option;

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view(
            'pages.auth.short-letter.index',
            [
                'short_letters' => ShortLetter::query()
                    ->select(['id', 'salutation', 'first_name', 'last_name', 'reason', 'status', 'created_at'])
                    ->where(function ($query) {
                        if ($this->search && $this->search_option)
                            if (in_array($this->search_option, ['reason', 'first_name', 'last_name']))
                                return $query->where($this->search_option, 'LIKE', '%' . $this->search . '%');
                    })
                    ->latest()
                    ->paginate(1)
            ]
        );
    }

    // update user settings
    public function updateUserLastSearchOptions($page = null)
    {
        // last page of short_letters
        // last search of short_letters
        // last search option of short_letters
        auth()->user()->settings->update([
            'misc->short_letter->pagination->last_page' => $page,
            'misc->short_letter->pagination->last_search' => $this->search,
            'misc->short_letter->pagination->last_search_option' => $this->search_option
        ]);
    }

    public function updateSearchQuery()
    {
        $this->resetPage();
        $this->updateUserLastSearchOptions();
    }

    public function updatedPage($page)
    {
        $this->updateUserLastSearchOptions($page);
    }
}
