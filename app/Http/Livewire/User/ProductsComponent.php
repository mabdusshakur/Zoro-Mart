<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{ 
    use WithPagination;
    public $minPrice;
    public $maxPrice;
    
    public function mount()
    {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
    }

    public function render()
    {
        $products = Product::whereBetween('price', [$this->minPrice, $this->maxPrice])->paginate(2);
        return view('livewire.user.products-component', ['products' => $products]);
    }
}
