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

    public $product_name, $description, $price, $quantity, $product_image, $category_id, $sub_category_id, $categories, $sub_categories, $category_name, $sub_category_name, $on_sale;
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
        $this->on_sale = $product->on_sale;
        $this->categories = Category::all();
        $this->sub_categories = SubCategory::all();
    }
    public function edit_product()
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
                'on_sale' => $this->on_sale,
            ]);

            
            if ($this->product_image != null) {
                $product_uid = $this->old_product->product_uid;
                foreach ($this->product_image as $image) {
                    $image_location = $image->storeAs('product/images', rand(1000, 10000) . '-' . time() . '.' . $image->getClientOriginalExtension(), 'public');
                    $product_image = new product_image();
                    $product_image->image = $image_location;
                    $product_image->product_uid = $product_uid;
                    $product_image->save();
                }
            }
            return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function delete_image($id)
    {
        $image = product_image::where('id', $id)->first();
        $image->delete();
        session()->flash('success', 'Image deleted successfully!');
    }
    public function render()
    {
        $old_product_image = product_image::where('product_uid', $this->old_product->product_uid)->get();
        if($this->category_id != null){
            $this->category_name = Category::where('id', $this->category_id)->first()->name;
        }
        if($this->sub_category_id != null){
            $this->sub_category_name = SubCategory::where('id', $this->sub_category_id)->first()->name;
        }
        return view('livewire.admin.edit-product-component', ['old_product_image' => $old_product_image])->layout('layouts.admin');
    }
}
