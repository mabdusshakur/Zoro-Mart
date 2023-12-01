<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CheckoutCancelComponent extends Component
{
    public function render()
    {
        return view('livewire.user.checkout-cancel-component');
    }
}
