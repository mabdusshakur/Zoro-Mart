<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class EditCategoryComponent extends Component
{
    public $category_name, $cat_id;
    public function mount($id)
    {
        $category = Category::where('id', $id)->first();
        $this->category_name = $category->name;
        $this->cat_id = $id;
    }
    public function edit_category()
    {
        try {
            Category::where('id', $this->cat_id)->update([
                'name' => $this->category_name,
                'slug' => Str::slug($this->category_name)
            ]);
            return redirect()->route('admin.categories')->with('success', 'Category has been updated successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.admin.edit-category-component')->layout('layouts.admin');
    }
}
