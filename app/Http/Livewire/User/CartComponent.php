<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;

class CartComponent extends Component
{
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
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        return view('livewire.user.cart-component', ['cartItems' => $cartItems]);
    }
}
