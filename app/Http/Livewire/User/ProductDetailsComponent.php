<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetailsComponent extends Component
{
    public $cart_item_count, $cartItems;
    public $product_name, $product_description, $product_price, $product_quantity, $product_uid, $product_id;
    
    public $products;

    public function mount($id, $slug = null, $category_id = null, $sub_category_id = null)
    {
        $this->products = Product::where('id', $id)->get();
        
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.user.product-details-component');
    }
}
