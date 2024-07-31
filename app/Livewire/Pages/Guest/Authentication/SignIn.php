<?php

namespace App\Livewire\Pages\Guest\Authentication;

use Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SignIn extends Component
{
    // email
    #[Validate(['required'])]
    public $email;

    // password
    #[Validate(['required'])]
    public $password;

    // render html
    #[Layout('components.layouts.pages.guest.authentication')]
    public function render()
    {
        return view('pages.guest.authentication.sign-in');
    }

    // sign in
    public function signIn()
    {
        // valide input data
        // log user in
        if (!Auth::attempt($this->validate()))
            return $this->addError('email', __('auth.failed'));

        // return home
        return $this->redirect(route('home'));
    }
}
