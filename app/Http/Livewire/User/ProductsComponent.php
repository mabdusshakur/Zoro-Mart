<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{ 
    use WithPagination;
    public $per_page_item, $filter_item;
    public $minPrice, $maxPrice;
    
    public function mount()
    {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
        $this->per_page_item = 10;
        $this->filter_item = 'by_name';
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
