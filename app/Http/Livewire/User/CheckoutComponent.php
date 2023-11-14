<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public $cart_item_count, $cartItems;

    public $first_name, $last_name, $email, $mobile, $address_1, $address_2, $city, $country, $zipcode, $phones, $notes, $payment_method;
    public function render()
    {
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.checkout-component');
    }
}
