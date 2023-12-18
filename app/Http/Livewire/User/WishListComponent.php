<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Utility;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Auth;

class WishListComponent extends Component
{
    public $socialmedias;
    public function mount()
    {
        $this->socialmedias = SocialMedia::all();
    }
    public function removeProduct($id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        session()->flash('success', 'Product has been removed from wishlist successfully!');
    }
    public function viewProductDetails($id, $slug, $category_id, $sub_category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id, 'sub_category_id' => $sub_category_id]);
    }
    public function render()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.user.wish-list-component',['wishlists' => $wishlists]);
    }
}
