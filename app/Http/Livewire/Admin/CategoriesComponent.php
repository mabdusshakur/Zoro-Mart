<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoriesComponent extends Component
{
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
        $categories = Category::all();
        return view('livewire.admin.categories-component', ['categories' => $categories])->layout('layouts.admin');
    }
}
