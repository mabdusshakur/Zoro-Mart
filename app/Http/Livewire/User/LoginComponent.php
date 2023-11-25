<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\SocialMedia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginComponent extends Component
{
    public $email, $password, $remember;
    public $socialmedias;

    public function mount()
    {
        if (Cookie::get('user_email')) {
            $this->email = Cookie::get('user_email');
        }
        if (Cookie::get('user_password')) {
            $this->password = Cookie::get('user_password');
        }
        $this->remember = true;
        $this->login();
        $this->socialmedias = SocialMedia::all();
    }
    public function login()
    {
        $validatedData = $this->validate([
            'email' => 'required|email|',
            'password' => 'required|min:6|',
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

        if (Auth::attempt($validatedData)) {
            if ($this->remember) {
                Cookie::queue('user_email', $this->email, 60 * 24 * 7);
                Cookie::queue('user_password', $this->password, 60 * 24 * 7);
            }
            return redirect()->intended();
        } else {
            return Session::flash('error', 'Invalid Email or Password.');
        }

        // return redirect()->route('home')->with('success', 'You have logged in successfully.');
    }
    public function render()
    {   
        return view('livewire.user.login-component');
    }
}
