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
        $user->save();
        session()->flash('success', 'Profile has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
