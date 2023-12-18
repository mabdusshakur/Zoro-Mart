<?php

namespace App\Http\Livewire\User;

use App\Models\Review;
use Livewire\Component;

class AllReviewsComponent extends Component
{
    public $reviews;
    public function mount($product_id)
    {
        $this->reviews = Review::where('product_id', $product_id)->get();
    } 
    public function render()
    {
        return view('livewire.user.all-reviews-component');
    }
}
