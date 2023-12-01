<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Utility;
use Livewire\Component;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $hotline;
    public $socialmedias;
    
    public function mount()
    {
        $this->hotline = Utility::first()->hotline;
        $this->socialmedias = SocialMedia::all();
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
        return view('livewire.user.cart-component');
    }
}
