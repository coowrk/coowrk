<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use App\Models\Letter;
use Livewire\Component;

class LetterShow extends Component
{
    public Letter $letter;

    public function render()
    {
        return view('livewire.pages.auth.letter-protocol.letter-show');
    }
}
