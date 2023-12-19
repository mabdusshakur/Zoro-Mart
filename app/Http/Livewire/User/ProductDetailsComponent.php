<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Review;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\ProductView;
use Illuminate\Support\Facades\Auth;

class ProductDetailsComponent extends BaseComponent
{
    public $cart_item_count, $cartItems;

    public $products, $best_selling_products;

    public $reviews;
    public function mount($id, $slug = null, $category_id = null, $sub_category_id = null)
    {
        $this->products = Product::where('id', $id)->get();
        $this->best_selling_products = Product::where('category_id', $category_id)->orWhere('sub_category_id', $sub_category_id)->orderBy('sold', 'DESC')->take(10)->get();
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        $this->product_id = $id;
        $this->reviews = Review::where('product_id', $id)->get();
        ProductView::create([
            'product_id' => $id,
            'user_id' => Auth::user()->id,
            'viewed_at' => now()
        ]);
        $this->product_quantity = 1;
    }

    public function addToCart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
        if ($cart) {
            $cart->quantity = $cart->quantity + $this->product_quantity;
            $cart->save();
            session()->flash('success', 'Product has been added in cart successfully!');
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $id;
            $cart->quantity = $this->product_quantity;
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
