<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public $product_name, $product_description, $product_price, $product_quantity, $product_uid , $product_id;
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
    public function render()
    {
        $products = Product::orderBy('name', 'ASC')->get();
        return view('livewire.user.home-component');
    }
}
