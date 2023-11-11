<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class ProductsComponent extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.user.products-component',['products' => $products]);
    }
}
