<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoriesComponent extends Component
{
    public $search;
    public function view_category($id)
    {

    }
    public function edit_category($id)
    {
        return redirect()->route('admin.edit-category', ['id' => $id]);
    }
    public function delete_category($id)
    {

    }
    public function render()
    {
        $searchQuery = '%'.$this->search.'%';
        $categories = Category::orderBy('id', 'DESC')->where('name', 'like', $searchQuery)->get();
        return view('livewire.admin.categories-component', ['categories' => $categories])->layout('layouts.admin');
    }
}
