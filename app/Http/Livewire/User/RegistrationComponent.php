<?php

namespace App\Http\Livewire\User;

use Http;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class RegistrationComponent extends Component
{
    public $user_first_name,$user_last_name, $email, $password, $c_password;
    public function register()
    {
        $validatedData = $this->validate([
            'user_first_name' => 'required',
            'user_last_name' => 'required',
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
            'first_name' => $this->user_first_name,
            'last_name' => $this->user_last_name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        return redirect()->route('user.login')->with('success', 'You have registered successfully.');
    }
    public function render()
    {
        return view('livewire.user.registration-component');
    }
}
