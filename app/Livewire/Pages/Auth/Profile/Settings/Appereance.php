<?php

namespace App\Livewire\Pages\Auth\Profile\Settings;

use App\Enums\AppereanceEnum;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Appereance extends Component
{
    // Attributes
    public User $user;
    public string $appereance;

    // Validation
    public function rules()
    {
        return [
            'appereance' => ['required'],
        ];
    }

    // Render view
    public function render()
    {
        return view('livewire.pages.auth.profile.settings.appereance');
    }

    // Mount data to attributes
    public function mount()
    {
        // User
        $this->user = auth()->user();

        // Attributes
        $this->appereance = $this->user->appereance;
    }

    // Update
    public function submit()
    {
        $this->user->update(['appereance' => $this->appereance]);
        $this->redirect(request()->header('Referer'));
    }
}
