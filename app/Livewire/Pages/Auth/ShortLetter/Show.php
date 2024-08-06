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
    public User $user;
    public Customer $customer;

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
        $this->short_letter = ShortLetter::findOrFail($this->id);

        // set customer and user data
        $this->user = User::find($this->short_letter->user_id);
        $this->customer = Customer::find($this->short_letter->customer_id);
    }

    // quick actions
    public function quick_action($type)
    {
        // status done
        if ($type == 'done') {
            if ($this->short_letter->status == 1)
                return;

            $this->short_letter->feed()->create([
                'user_id' => auth()->user()->id,
                'new_status' => '1',
                'title' => 'pages/auth/short-letter.feed.changed-state'
            ]);

            $this->short_letter->update(['status' => '1']);
        }

        // status done
        if ($type == 'postal-return') {
            if ($this->short_letter->status == 5)
                return;

            $this->short_letter->feed()->create([
                'user_id' => auth()->user()->id,
                'new_status' => '5',
                'title' => 'pages/auth/short-letter.feed.changed-state'
            ]);

            $this->short_letter->update(['status' => '5']);
        }
    }
}
