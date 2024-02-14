<?php

namespace App\Livewire\Pages\Auth\Profile\Settings;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.pages.auth.profile.settings')]
class Security extends Component
{
    // Attributes
    public User $user;
    public string $password_old;
    public string $password_new;
    public string $password_new_confirmation;

    // Validation
    public function rules()
    {
        return [
            'password_old' => ['required', 'string'],
            'password_new' => ['required', 'string', Password::min(8)->mixedCase(), 'confirmed'],
        ];
    }

    // Render view
    public function render(): View
    {
        return view('livewire.pages.auth.profile.settings.security');
    }

    // Mount data to attributes
    public function mount()
    {
        // User
        $this->user = auth()->user();
    }

    // Update
    public function submit()
    {
        // Validation
        $this->validate();

        // Check old password
        if (!Hash::check($this->password_old, $this->user->password))
            return $this->addError('password_old', 'Passwort stimmt nicht!');

        // Update password
        $this->user->update([
            'password' => Hash::make($this->password_new)
        ]);

        // Log user out
        Auth::logout();

        // Delete session local
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect to login
        return $this->redirect(route('login'));
    }
}
