<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $first_name, $last_name, $email, $current_password, $new_password, $confirm_password;
    
    public function render()
    {
        return view('livewire.admin.profile-component')->layout('layouts.admin');
    }
}
