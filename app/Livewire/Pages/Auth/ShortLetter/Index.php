<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view(
            'pages.auth.short-letter.index',
            ['short_letters' => ShortLetter::paginate(1)]
        );
    }
}
