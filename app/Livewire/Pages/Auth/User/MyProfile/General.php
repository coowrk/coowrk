<?php

namespace App\Livewire\Pages\Auth\User\MyProfile;

use Illuminate\Support\Arr;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class General extends Component
{
    // properties
    public $showInputName = false;
    // public $showInputEmail = false;

    #[Validate(['required', 'min:2', 'max:255'])]
    public $first_name;

    #[Validate(['required', 'min:2', 'max:255'])]
    public $last_name;

    // public $email;

    // render html
    #[Layout('components.layouts.pages.auth.user.my-profile.default')]
    public function render()
    {
        return view('pages.auth.user.my-profile.general');
    }

    // fetch data
    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        // $this->email = auth()->user()->email;
    }

    // update name
    public function updateUserName()
    {
        // update user name
        // validate input data
        auth()->user()->update(
            Arr::only($this->validate(), ['first_name', 'last_name'])
        );

        // hide name inputs
        $this->showInputName = false;
    }
}
