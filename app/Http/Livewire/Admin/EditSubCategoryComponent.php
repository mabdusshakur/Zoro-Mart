<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class EditSubCategoryComponent extends Component
{
    public $sub_category_name, $categories, $category_id , $category_name;

    public function mount($id)
    {
        $this->current_sub_category = SubCategory::where('id', $id)->first();
        $this->sub_category_name = $this->current_sub_category->name;
        $this->categories = Category::all();
    }

    public function edit_sub_category()
    {

         $this->validate([
             'sub_category_name' => 'required',
             'category_id' => 'required'
         ]);

        try {
            $this->current_sub_category->update([
                'name' => $this->sub_category_name,
                'category_id' => $this->category_id,
                'slug' => Str::slug($this->sub_category_name)
            ]);
           return redirect()->route('admin.sub-categories')->with('success', 'Sub Category updated successfully!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong!' . $th->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.admin.edit-sub-category-component')->layout('layouts.admin');
    }
}
