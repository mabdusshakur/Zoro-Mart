<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class AddSubCategoryComponent extends Component
{
    public $sub_category_name, $categories, $category_id;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function add_sub_category()
    {
        $this->validate([
            'sub_category_name' => 'required',
            'category_id' => 'required'
        ]);

        try {
            $sub_category = new SubCategory();
            $sub_category->name = $this->sub_category_name;
            $sub_category->category_id = $this->category_id;
            $sub_category->slug = Str::slug($this->sub_category_name);
            $sub_category->save();
            Category::find($this->category_id)->increment('sub_category_count', 1);
            session()->flash('success', 'Sub Category has been created successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!' . $th->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.add-sub-category-component')->layout('layouts.admin');
    }
}
