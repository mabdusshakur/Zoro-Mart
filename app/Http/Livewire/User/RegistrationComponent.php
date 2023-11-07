<?php

namespace App\Http\Livewire\User;

use Http;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class RegistrationComponent extends Component
{
    public $user_name, $email, $password;
    public function register()
    {
        $request = Http::post('http://localhost:8001/api/register', [
            'name' => $this->user_name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password
        ]);
        $response = $request->json();
        if($response['success']){

            $token = $response['data']['token'];
            Session::put('api_bearer_token', $token);
            return redirect()->route('home');
        }    
    }
    public function render()
    {
        return view('livewire.user.registration-component');
    }
}
