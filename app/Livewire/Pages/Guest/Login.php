<?php

namespace App\Livewire\Pages\Guest;

use App\Http\Requests\Pages\Guest\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $mail;
    public string $password;

    public function render(): View
    {
        return view('components.livewire.pages.guest.login');
    }

    // Validate FORM
    protected function rules(): array
    {
        return (new LoginRequest())->rules();
    }

    public function submit()
    {
        // Validate
        $this->validate();

        // If Authentication failes redirect back
        if (!Auth::attempt($this->only(['mail', 'password'])))
            return $this->addError('mail', __('auth.failed'));

        sleep(2);

        $this->dispatch("modal.show", now());
    }
}
