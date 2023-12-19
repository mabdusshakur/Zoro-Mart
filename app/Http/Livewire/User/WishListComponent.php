<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Utility;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Auth;

class WishListComponent extends BaseComponent
{
    public function removeProduct($id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        session()->flash('success', 'Product has been removed from wishlist successfully!');
    }

    public function render()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.user.wish-list-component',['wishlists' => $wishlists]);
    }
}
