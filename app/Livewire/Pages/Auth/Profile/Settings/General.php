<?php

namespace App\Livewire\Pages\Auth\Profile\Settings;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class General extends Component
{
    use WithFileUploads;

    // Attributes
    public User $user;
    public string $first_name;
    public string $last_name;
    public string $mail;
    public $avatar;

    // Validation
    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'mail' => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'avatar' => ['image', 'max:1024']
        ];
    }

    // Render view
    public function render(): View
    {
        return view('livewire.pages.auth.profile.settings.general');
    }

    // Mount data to attributes
    public function mount()
    {
        // User
        $this->user = auth()->user();

        // Attributes
        $this->first_name = $this->user->first_name;
        $this->last_name = $this->user->last_name;
        $this->mail = $this->user->mail;
    }

    // Update
    public function submit()
    {
        $this->updateProfilePicture();

        $this->user->update($this->validate());
        $this->redirect(request()->header('Referer'));
    }

    public function updateProfilePicture()
    {
        if ($this->avatar) {
            dd(Storage::url($this->avatar->store('uploads')));
        }
    }
}
