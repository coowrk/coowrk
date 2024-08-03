<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    // properties
    public Collection $short_letters;

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.short-letter.index');
    }

    // fetch data
    public function mount()
    {
        $this->short_letters = ShortLetter::all();
    }
}
