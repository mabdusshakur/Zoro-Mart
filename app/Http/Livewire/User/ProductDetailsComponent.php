<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
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

    
    public function addToWishlist($id)
    {
        $product = Product::find($id);
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->product_id = $product->id;
        $wishlist->save();
        session()->flash('success', 'Product has been added in wishlist successfully!');
        // return redirect()->route('user.wishlist');
    }

    public function addToCart($id)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
        if ($cart) {
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
            session()->flash('success', 'Product has been added in cart successfully!');
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $id;
            $cart->quantity = 1;
            $cart->save();
            session()->flash('success', 'Product has been added in cart successfully!');
        }
        return redirect()->route('user.cart');
    }
    
    public function render()
    {
        return view('livewire.user.product-details-component');
    }
}
