<?php

namespace App\Http\Livewire\User;

use Livewire\Livewire;
use App\Models\Product;
use Livewire\Component;

class ProductsComponent extends Component
{
    public $minPrice;
    public $maxPrice;
    public $selectedPriceRange;
    
    protected $listeners = [
        'updateProductPrice' => 'updateProductPrice',
    ];
    public function mount()
    {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
    }
    public function check()
    {
        dd($this->selectedPriceRange);
    }
    public function render()
    {
        $products = Product::whereBetween('price', [$this->minPrice, $this->maxPrice])->get();
        return view('livewire.user.products-component', ['products' => $products]);
    }
}
