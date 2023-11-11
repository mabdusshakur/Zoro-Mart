<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\product_image;
use Livewire\Component;

class ProductsComponent extends Component
{  
    public $search;
    public function view_product($id)
    {

    }
    public function edit_product($id)
    {
        return redirect()->route('admin.edit-product', ['id' => $id]);
    }
    public function delete_product($id)
    {

    }
    public function render()
    {
        $searchQuery = '%'.$this->search.'%';
        $products = Product::orderBy('id', 'DESC')->where('name', 'like', $searchQuery)->get();
        return view('livewire.admin.products-component',['products' => $products])->layout('layouts.admin');
    }
}
