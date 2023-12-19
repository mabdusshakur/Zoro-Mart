<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class BaseComponent extends Component
{
    public function addToWishlist($id)
    {
        $product = Product::find($id);
        if (Wishlist::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first()) {
            return redirect()->route('user.wishlist');
        } else {
            Wishlist::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
            ]);
            return redirect()->route('user.wishlist');
        }
    }
}
