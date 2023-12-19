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

    public function viewProductDetails($id, $slug, $category_id, $sub_category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id, 'sub_category_id' => $sub_category_id]);
    }
}
