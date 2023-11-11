<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProductsComponent extends Component
{
    public function edit_product($id)
    {
        return redirect()->route('admin.edit-product', ['id' => $id]);
    }
    public function render()
    {
        return view('livewire.admin.products-component')->layout('layouts.admin');
    }
}
