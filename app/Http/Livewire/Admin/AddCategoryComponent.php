<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AddCategoryComponent extends Component
{
    public $category_name;
    public function add_category()
    {
        try {
            $category = new Category();
            $category->name = $this->category_name;
            $category->slug = Str::slug($this->category_name);
            $category->save();
            session()->flash('success', 'Category has been created successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.admin');
    }
}
