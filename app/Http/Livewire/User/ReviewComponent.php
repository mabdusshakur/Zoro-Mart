<?php

namespace App\Http\Livewire\User;

use App\Models\Review;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ReviewComponent extends Component
{
    public $product;
    public $review, $rating;
    public function mount($product_id)
    {
        $this->product = Product::find($product_id);
    }
    public function addReview()
    {
        Review::create([
            'rating' => $this->rating,
            'review' => $this->review,
            'user_id' => Auth::user()->id,
            'product_id' => $this->product->id,
        ]);
    }
    

    public function render()
    {
        return view('livewire.user.review-component');
    }
}
