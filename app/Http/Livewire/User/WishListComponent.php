<?php

namespace App\Http\Livewire\User;

use App\Models\Wishlist;
use Livewire\Component;

class WishListComponent extends Component
{
    public function render()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get()->first();
        return view('livewire.user.wish-list-component',['wishlists' => $wishlists]);
    }
}
