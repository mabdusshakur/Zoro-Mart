<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CategoriesComponent extends Component
{
    public function edit_category($id)
    {
        return redirect()->route('admin.edit-category', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.admin.categories-component')->layout('layouts.admin');
    }
}
