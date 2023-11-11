<?php

namespace App\Http\Livewire\Admin;

use App\Models\product_image;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class EditProductComponent extends Component
{
    use WithFileUploads;

    public $product_name, $description, $price, $quantity, $product_image, $category_id, $sub_category_id, $categories, $sub_categories;
    public $test_product_images;

    public $old_product;
    
    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->product_name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->category_id = $product->category_id;
        $this->sub_category_id = $product->sub_category_id;
        $this->old_product = $product;
        
        $this->categories = Category::all();
        $this->sub_categories = SubCategory::all();
    }
    public function add_product()
    {
        try {
            $this->validate([
                'product_name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'product_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
                'category_id' => 'required',
                'sub_category_id' => 'required'
            ]);
            
            $this->old_product->update([
                'name' => $this->product_name,
                'slug' => Str::slug($this->product_name),
                'description' => $this->description,
                'price' => $this->price,
                'quantity' => $this->quantity,
                'category_id' => $this->category_id,
                'sub_category_id' => $this->sub_category_id,
            ]);
            
            return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!');
        }
    }
    
    public function render()
    {
        return view('livewire.admin.edit-product-component')->layout('layouts.admin');
    }
}
