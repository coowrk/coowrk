<?php

namespace App\Livewire\Routes\Authentication;

use App\Http\Requests\Authentication\LoginRequest;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;

    #[Layout('layouts.authentication')]
    public function render()
    {
        return view('routes.authentication.login');
    }

    protected function rules(): array
    {
        return (new LoginRequest())->rules();
    }

    public function submit()
    {
        $this->validate();
    }
}
