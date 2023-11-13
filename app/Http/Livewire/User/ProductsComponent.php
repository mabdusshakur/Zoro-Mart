<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ProductsComponent extends Component
{ 
    use WithPagination;
    public $per_page_item, $filter_item;
    public $minPrice, $maxPrice;
    
    public $product_name, $product_description, $product_price, $product_quantity, $product_uid;
    public function mount()
    {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
        $this->per_page_item = 10;
        $this->filter_item = 'by_name';
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
    }
    public function render()
    {
        if($this->filter_item == 'by_name')
        {
            $products = Product::orderBy('name', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
        }
        else if($this->filter_item == 'by_lowest_price')
        {
            $products = Product::orderBy('price', 'ASC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
        }
        else if($this->filter_item == 'by_highest_price')
        {
            $products = Product::orderBy('price', 'DESC')->whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
        }
        return view('livewire.user.products-component', ['products' => $products]);
    }
}
