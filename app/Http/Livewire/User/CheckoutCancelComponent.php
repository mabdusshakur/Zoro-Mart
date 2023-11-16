<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CheckoutCancelComponent extends Component
{
    public $cart_item_count, $cartItems;

    public function mount()
    {
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
    }
    public function render()
    {
        return view('livewire.user.checkout-cancel-component');
    }
}
