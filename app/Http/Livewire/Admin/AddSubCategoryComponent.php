<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddSubCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-sub-category-component')->layout('layouts.admin');
    }
}
