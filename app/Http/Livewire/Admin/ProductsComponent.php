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
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            $product_images = product_image::where('product_uid', $product->product_uid)->get();
            foreach ($product_images as $product_image) {
                $product_image->delete();
            }
        }
        session()->flash('success', 'Product has been deleted successfully!');
    }
    public function render()
    {
        $searchQuery = '%' . $this->search . '%';
        $products = Product::orderBy('id', 'DESC')->where(function ($query) use ($searchQuery) {
            $query->where('name', 'like', $searchQuery)->orWhere('product_uid', 'like', $searchQuery);
        })->get();
        return view('livewire.admin.products-component', ['products' => $products])->layout('layouts.admin');
    }
}
