<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetailsComponent extends Component
{
    public $cart_item_count, $cartItems;
    public $product_name, $product_description, $product_price, $product_quantity, $product_uid , $product_id;
    public function render()
    {
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.product-details-component');
    }
}
