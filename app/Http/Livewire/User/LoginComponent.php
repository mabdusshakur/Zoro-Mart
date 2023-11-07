<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginComponent extends Component
{
    public $email, $password;
    public function login()
    {
        $request = Http::post('http://localhost:8001/api/login', [
            'email' => $this->email,
            'password' => $this->password
        ]);
        $response = $request->json();
        if ($response['success']) {
            $token = $response['data']['token'];
            Session::put('api_bearer_token', $token);
            return redirect()->route('products');
        }
    }
    public function render()
    {
        return view('livewire.user.login-component');
    }
}
