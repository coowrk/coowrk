<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use App\Models\Letter;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class LetterList extends Component
{
    public Collection $letters;

    public function render()
    {
        return view('livewire.pages.auth.letter-protocol.letter-list');
    }

    public function mount(): Collection
    {
        return $this->letters = Letter::query()
            ->take(10)
            ->get();
    }
}
