<?php

namespace App\Http\Livewire\Admin;

use App\Models\SubCategory;
use Livewire\Component;

class SubCategoriesComponent extends Component
{
    public $search;
    public function view_sub_category($id)
    {
        
    }
    public function edit_sub_category($id)
    {
        return redirect()->route('admin.edit-sub-category', ['id' => $id]);
    }
    public function delete_sub_category($id)
    {
        $sub_category = SubCategory::find($id);
        if($sub_category){
            $sub_category->delete();
        }
        session()->flash('success', 'Sub Category has been deleted successfully!');
    }
    public function render()
    {
        $searchQuery = '%'.$this->search.'%';
        $sub_categories = SubCategory::orderBy('id', 'DESC')->where('name', 'like', $searchQuery)->get();
        return view('livewire.admin.sub-categories-component',['sub_categories' => $sub_categories])->layout('layouts.admin');
    }
}
