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

class HomeComponent extends Component
{
    public $product_name, $product_description, $product_price, $product_quantity, $product_uid, $product_id;

    public $cart_item_count, $cartItems;

    public $categories;

    public $banners;

    public $features;
    public $hotline;
    
    public $socialmedias;
    public $main_search;
    public function mount()
    {
        if (Auth::check()) {
            $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
            $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        }
        $this->categories = Category::all();
        $this->banners = Banner::where('banner_status', 1)->get();
        $this->features = Feature::take(5)->get();
        $this->hotline = optional(Utility::first())->hotline;
        $this->socialmedias = SocialMedia::all();
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

    public function goTogCategoryProducts($id, $slug)
    {
        return redirect()->route('user.products', ['id' => $id, 'slug' => $slug]);
    }

    public function goTogSubCategoryProducts($id, $slug, $sub_category_id)
    {
        return redirect()->route('user.products', ['id' => $id, 'slug' => $slug, 'sub_category_id' => $sub_category_id]);
    }

    public function viewProductDetails($id, $slug, $category_id, $sub_category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id, 'sub_category_id' => $sub_category_id]);
    }

    public function render()
    {
        $live_search_products = [];
        $products = Product::orderBy('name', 'ASC')->get();
        $best_selling_products = Product::orderBy('sold', 'DESC')->take(8)->get();
        $most_viewed_products = Product::withCount('productViews')->orderBy('product_views_count', 'DESC')->take(8)->get();
        $most_sell_and_view_products = Product::withCount('productViews')->orderBy('product_views_count', 'DESC')->orderBy('sold', 'DESC')->take(3)->get();
        if($this->main_search != null){
            $live_search_products = Product::where('name', 'LIKE', '%'.$this->main_search.'%')->orderBy('name', 'ASC')->get();
        }
        return view('livewire.user.home-component', ['products' => $products, 'best_selling_products' => $best_selling_products, 'most_viewed_products' => $most_viewed_products, 'most_sell_and_view_products' => $most_sell_and_view_products, 'live_search_products' => $live_search_products]);
    }
}
