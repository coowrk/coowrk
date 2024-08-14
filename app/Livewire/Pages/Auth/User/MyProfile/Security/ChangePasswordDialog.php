<?php

namespace App\Livewire\Pages\Auth\User\MyProfile\Security;

use Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ChangePasswordDialog extends Component
{
    // properties
    public $show = false;

    #[Validate(['required'])]
    public $password_old;

    #[Validate(['required', 'min:8', 'confirmed'])]
    public $password;

    #[Validate(['required', 'min:8'])]
    public $password_confirmation;

    // render html
    public function render()
    {
        return view('pages.auth.user.my-profile.security.change-password-dialog');
    }

    // visibility state event
    #[On('change.user.my-profile.security.show.change-password-dialog.visibility.state')]
    public function changeUserMyProfileSecurityShowChangePasswordDialogVisibilityState()
    {
        $this->show = true;
    }

    // update password
    public function updateUserPassword()
    {
        // check user password
        if (!Hash::check($this->password_old, auth()->user()->password))
            return $this->addError('password_old', 'Ne');

        // validate input data
        $validated = $this->validate();

        // update user password
        auth()
            ->user()
            ->update(
                Arr::only($validated, ['password'])
            );

        // logout other sessions
        auth()
            ->user()
            ->sessions()
            ->delete();

        // logout current user
        Auth::logout();

        // redirect to login
        return $this->redirectRoute('login');
    }
}
