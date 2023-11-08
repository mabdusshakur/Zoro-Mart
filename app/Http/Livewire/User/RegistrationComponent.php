<?php

namespace App\Http\Livewire\User;

use Http;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class RegistrationComponent extends Component
{
    public $user_name, $email, $password, $c_password;
    public function register()
    {
        $validatedData = $this->validate([
            'user_name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:c_password',
            'c_password' => 'required|min:6',
        ]);

        $errors = [];

        if (!$validatedData) {
            foreach ($validatedData as $key => $value) {
                if ($value) {
                    $errors[$key] = $value;
                }
            }
            foreach ($errors as $key => $value) {
                $this->addError($key, $value);
            }
        }
        
        User::create([
            'name' => $this->user_name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        return redirect()->route('login')->with('success', 'You have registered successfully.');
    }
    public function render()
    {
        return view('livewire.user.registration-component');
    }
}
