<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $first_name, $last_name, $current_password, $new_password, $confirm_password;

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
    }
    public function saveProfile()
    {
        $this->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
        ]);
        $user = auth()->user();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        if ($user->save()) {
            session()->flash('success', 'Profile has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }

    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);
        $user = auth()->user();
        if (\Hash::check($this->current_password, $user->password)) {
            $user->password = \Hash::make($this->new_password);
            $user->save();
            session()->flash('success', 'Password has been updated successfully!');
        } else {
            session()->flash('error', 'Current password is incorrect!');
        }
    }
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
