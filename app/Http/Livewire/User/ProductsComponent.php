<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{ 
    use WithPagination;
    public $per_page_item;
    public $minPrice, $maxPrice;
    
    public function mount()
    {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
    }
    public function render()
    {
        $products = Product::whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate($this->per_page_item ? $this->per_page_item : 5);
        return view('livewire.user.products-component', ['products' => $products]);
    }
}
