<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\product_image;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $product_name, $description, $price, $quantity, $product_image, $category_id, $sub_category_id, $categories, $sub_categories, $category_name, $sub_category_name, $on_sale, $discount_price;
    public $test_product_images;
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
                'product_image.*' => 'required|image|mimes:jpeg,png,jpg,webp,svg',
                'category_id' => 'required',
                'sub_category_id' => 'required',
                'discount_price' => 'nullable|numeric',
                'on_sale' => 'nullable|boolean',
            ]);


            $product_uid = Carbon::now()->timestamp . uniqid();

            $product = new Product();
            $product->name = $this->product_name;
            $product->slug = Str::slug($this->product_name);
            $product->description = $this->description;
            $product->price = $this->price;
            $product->quantity = $this->quantity;
            $product->category_id = $this->category_id;
            $product->sub_category_id = $this->sub_category_id;
            $product->product_uid = $product_uid;
            $product->on_sale = $this->on_sale ?? false;
            $product->discount_price = $this->discount_price;

            foreach ($this->product_image as $image) {
                $image_location = $image->storeAs('product/images', rand(1000, 10000) . '-' . time() . '.' . $image->getClientOriginalExtension(), 'public');
                $product_image = new product_image();
                $product_image->image = $image_location;
                $product_image->product_uid = $product_uid;
                $product_image->save();
            }
            Category::find($this->category_id)->increment('product_count', 1);
            SubCategory::find($this->sub_category_id)->increment('product_count', 1);
            $product->save();
            session()->flash('success', 'Product has been added successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        if ($this->category_id != null) {
            $this->category_name = Category::where('id', $this->category_id)->first()->name;
        }
        if ($this->sub_category_id != null) {
            $this->sub_category_name = SubCategory::where('id', $this->sub_category_id)->first()->name;
        }
        return view('livewire.admin.add-product-component')->layout('layouts.admin');
    }
}
