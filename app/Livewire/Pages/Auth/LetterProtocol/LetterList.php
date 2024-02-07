<?php

namespace App\Livewire\Pages\Auth\LetterProtocol;

use Livewire\Attributes\Url;
use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class LetterList extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    /**
     * Rendering the view
     * 
     * @return View
     */
    public function render(): View
    {
        return view('livewire.pages.auth.letter-protocol.letter-list', [
            'letters' => Letter::query()
                ->select(['id', 'salutation', 'status', 'full_name', 'topic', 'created_at', 'slug'])
                ->where(function ($query) {
                    $query->orWhere('full_name', 'LIKE', '%' . $this->search . '%');
                    $query->orWhere('topic', 'LIKE', '%' . $this->search . '%');
                })
                ->latest()
                ->paginate(2)
        ]);
    }

    /**
     * Rendering the view
     * 
     * @return void
     */
    public function searchLetters(): void
    {
        $this->resetPage();
    }
}
