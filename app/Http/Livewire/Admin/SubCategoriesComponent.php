<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SubCategoriesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.sub-categories-component')->layout('layouts.admin');
    }
}
