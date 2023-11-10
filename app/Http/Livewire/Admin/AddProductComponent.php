<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $product_name, $description, $price, $quantity, $product_image, $category_id, $sub_category_id, $categories, $sub_categories;

    public function mount()
    {
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
    
            $product = new Product();
            $product->name = $this->product_name;
            $product->slug = strtolower(str_replace(' ', '-', $this->product_name));
            $product->description = $this->description;
            $product->price = $this->price;
            $product->quantity = $this->quantity;
            $product->category_id = $this->category_id;
            $product->sub_category_id = $this->sub_category_id;
            foreach ($this->product_image as $image) {
                $image_location = $image->storeAs('product/images', rand(1000,10000).'-'.time().'.'.$image->getClientOriginalExtension(), 'public');
                $product->image = $image_location;
            }
            Category::find($this->category_id)->increment('product_count',1);
            SubCategory::find($this->sub_category_id)->increment('product_count',1);
            $product->save();
            session()->flash('success', 'Product has been added successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.add-product-component')->layout('layouts.admin');
    }
}
