<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $first_name, $last_name, $email, $current_password, $new_password, $confirm_password;

    public function updateInformation()
    {
        $this->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
        ]);
        $user = auth()->user();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;

        if ($user->save()) {
            session()->flash('success', 'Profile has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.profile-component')->layout('layouts.admin');
    }
}
