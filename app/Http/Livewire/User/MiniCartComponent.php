<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MiniCartComponent extends Component
{
    public $cart_item_count, $cartItems;
    public function render()
    {
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.mini-cart-component');
    }
}
