<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class ReviewComponent extends Component
{
    public $product;

    public function mount($product_id)
    {
        $this->product = Product::find($product_id);
    }

    public function render()
    {
        return view('livewire.user.review-component');
    }
}
