<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SubCategoriesComponent extends Component
{
    public function edit_sub_category($id)
    {
        return redirect()->route('admin.edit-sub-category', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.admin.sub-categories-component')->layout('layouts.admin');
    }
}
