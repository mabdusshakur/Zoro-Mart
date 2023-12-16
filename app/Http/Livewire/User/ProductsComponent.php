<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Review;
use App\Models\Product;
use App\Models\Utility;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\SocialMedia;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ProductsComponent extends Component
{
    use WithPagination;
    public $per_page_item, $filter_item;
    public $minPrice, $maxPrice;

    public $product_name, $product_description, $product_price, $product_quantity, $product_uid, $product_id;

    public $main_search;

    public $search_category_slug, $search_category_id, $search_sub_category_id;

    public $hotline;
    public $socialmedias;
    public function mount($id = null, $slug = null, $sub_category_id = null)
    {
        if ($id && $slug) {
            $this->search_category_id = $id;
            $this->search_category_slug = $slug;
        }
        if ($id && $slug && $sub_category_id) {
            $this->search_category_id = $id;
            $this->search_category_slug = $slug;
            $this->search_sub_category_id = $sub_category_id;
        }

        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
        $this->per_page_item = 10;
        $this->filter_item = 'by_name';
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

    public function mainSearch()
    {
        return redirect()->route('user.product');
    }

    public function viewProductDetails($id, $slug, $category_id, $sub_category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id, 'sub_category_id' => $sub_category_id]);
    }
    public function render()
    {  
        if ($this->filter_item == 'by_name') {
            if ($this->search_category_id == null && $this->search_category_slug == null && $this->search_sub_category_id == null) {
                $products = Product::orderBy('name', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
            } else if ($this->search_category_id && $this->search_category_slug && $this->search_sub_category_id) {
                $products = Product::where('sub_category_id', $this->search_sub_category_id)->orderBy('name', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
            }
        } 
        else if ($this->filter_item == 'by_lowest_price') {
            if ($this->search_category_id == null && $this->search_category_slug == null && $this->search_sub_category_id == null) {
                $products = Product::orderBy('name', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
            } else if ($this->search_category_id && $this->search_category_slug && $this->search_sub_category_id) {
                $products = Product::where('sub_category_id', $this->search_sub_category_id)->orderBy('price', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
            }
        } 
        else if ($this->filter_item == 'by_highest_price') {
            if ($this->search_category_id == null && $this->search_category_slug == null && $this->search_sub_category_id == null) {
                $products = Product::orderBy('name', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
            } else if ($this->search_category_id && $this->search_category_slug && $this->search_sub_category_id) {
                $products = Product::where('sub_category_id', $this->search_sub_category_id)->orderBy('price', 'DESC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
            }
        }
        return view('livewire.user.products-component', ['products' => $products]);
    }
}
