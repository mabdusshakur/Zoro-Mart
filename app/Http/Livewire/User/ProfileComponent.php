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
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
