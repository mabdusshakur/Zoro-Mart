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
    public $main_search;

    public $search_category_slug, $search_category_id, $search_sub_category_id;

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
    public function render()
    {
        $productsQuery = Product::whereBetween('price', [$this->minPrice, $this->maxPrice]);

        // to select products by there category and sub category
        if ($this->search_category_id && $this->search_category_slug && $this->search_sub_category_id) {
            $productsQuery->where('sub_category_id', $this->search_sub_category_id);
        } else if ($this->search_category_id && $this->search_category_slug) {
            $productsQuery->where('category_id', $this->search_category_id);
        }

        // in page filtering
        if ($this->filter_item == 'by_lowest_price') {
            $productsQuery->orderBy('price', 'ASC');
        } else if ($this->filter_item == 'by_highest_price') {
            $productsQuery->orderBy('price', 'DESC');
        } else {
            $productsQuery->orderBy('name', 'ASC');
        }

        $products = $productsQuery->paginate($this->per_page_item ? $this->per_page_item : 5);
        return view('livewire.user.products-component', ['products' => $products]);
    }
}
