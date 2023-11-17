<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public $product_name, $product_description, $product_price, $product_quantity, $product_uid , $product_id;
    
    public $cart_item_count, $cartItems;

    public $categories;

    public function mount()
    {
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        $this->categories = Category::all();
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
    public function showProductModal($id)       
    {
        $product = Product::find($id);
        $this->product_name = $product->name;
        $this->product_description = $product->description;
        $this->product_quantity = $product->quantity;
        $this->product_price = $product->price;
        $this->product_uid = $product->product_uid;
        $this->product_id = $product->id;
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
        $products = Product::orderBy('name', 'ASC')->get();
        $best_selling_products = Product::orderBy('sold', 'DESC')->take(8)->get();
        return view('livewire.user.home-component',['products' => $products, 'best_selling_products' => $best_selling_products]);
    }
}
