<?php

namespace App\Livewire\Pages\Auth\ShortLetter;

use App\Models\Customer;
use App\Models\ShortLetter;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

class Show extends Component
{
    // properties
    #[Url()]
    public $id;

    public ShortLetter $short_letter;

    // render html
    #[Layout('components.layouts.pages.auth.default')]
    public function render()
    {
        return view('pages.auth.short-letter.show');
    }

    // fetch data
    public function mount()
    {
        // set short letter
        $this->short_letter = ShortLetter::with(
            'created_by:id,name',
            'belongs_to_customer:id,first_name,last_name',
            'feed:id,short_letter_id,user_id,new_status,title,comment,created_at',
            'feed.created_by:id,name'
        )->findOrFail($this->id);
    }
}
