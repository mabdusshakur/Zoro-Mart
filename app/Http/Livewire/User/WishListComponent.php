<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishListComponent extends Component
{
    public $cart_item_count, $cartItems;
    public function removeProduct($id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        session()->flash('success', 'Product has been removed from wishlist successfully!');
    }
    public function render()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.wish-list-component',['wishlists' => $wishlists]);
    }
}
