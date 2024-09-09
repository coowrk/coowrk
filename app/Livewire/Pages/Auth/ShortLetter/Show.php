<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\ShortLetter;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class Show extends Component
{
    // properties
    #[Url()]
    public $id;

    // render html
    #[Layout('components.layout.page.auth.default')]
    public function render()
    {
        return view('pages.auth.short-letter.show', [
            'short_letter' => ShortLetter::with(
                'created_by:id,first_name,last_name',
                'belongs_to_customer:id,first_name,last_name',
                'feed:id,short_letter_id,user_id,new_status,title,comment,created_at',
                'feed.created_by:id,first_name,last_name'
            )->findOrFail($this->id)
        ]);
    }
}
