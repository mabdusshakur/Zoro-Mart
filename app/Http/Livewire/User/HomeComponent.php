<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Product;
use App\Models\SocialMedia;
use App\Models\Utility;
use Livewire\Component;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends BaseComponent
{
    public $categories;

    public $banners;

    public $features;

  
    public function mount()
    {
        $this->categories = Category::all();
        $this->banners = Banner::where('banner_status', 1)->get();
        $this->features = Feature::take(5)->get();
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

    public function goTogCategoryProducts($id, $slug)
    {
        return redirect()->route('user.products', ['id' => $id, 'slug' => $slug]);
    }

    public function goTogSubCategoryProducts($id, $slug, $sub_category_id)
    {
        return redirect()->route('user.products', ['id' => $id, 'slug' => $slug, 'sub_category_id' => $sub_category_id]);
    }

    public function render()
    {
        $products = Product::get();
        return view('livewire.user.home-component', ['products' => $products]);
    }
}
