<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        return view('livewire.user.cart-component', ['cartItems' => $cartItems]);
    }
}
