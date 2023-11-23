<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Utility;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $cart_item_count, $cartItems;
    public $hotline;

    public function mount()
    {
        $this->hotline = Utility::first()->hotline;
    }
    public function increaseQuantity($id)
    {
        $cart = Cart::find($id);
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        session()->flash('success', 'Cart item quantity has been updated successfully!');
    }
    public function decreaseQuantity($id)
    {
        $cart = Cart::find($id);
        if ($cart->quantity > 1) {
            $cart->quantity = $cart->quantity - 1;
            $cart->save();
            session()->flash('success', 'Cart item quantity has been updated successfully!');
        } else {
            session()->flash('error', 'Cart item quantity can not be less than 1!');
        }
    }
    public function render()
    {
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.cart-component');
    }
}
