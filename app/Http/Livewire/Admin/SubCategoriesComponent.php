<?php

namespace App\Http\Livewire\Admin;

use App\Models\SubCategory;
use Livewire\Component;

class SubCategoriesComponent extends Component
{
    public function view_sub_category($id)
    {
        
    }
    public function edit_sub_category($id)
    {
        return redirect()->route('admin.edit-sub-category', ['id' => $id]);
    }
    public function delete_sub_category($id)
    {
        
    }
    public function render()
    {
        $sub_categories = SubCategory::all();
        return view('livewire.admin.sub-categories-component',['sub_categories' => $sub_categories])->layout('layouts.admin');
    }
}
