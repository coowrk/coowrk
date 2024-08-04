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

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view(
            'pages.auth.short-letter.index',
            ['short_letters' => ShortLetter::paginate(1)]
        );
    }

    public function boot()
    {
        // update user settings
        // last visited page of short_letters
        auth()->user()->settings->update([
            'misc->short_letter->pagination->last_visited_page' => $this->page
        ]);
    }
}
