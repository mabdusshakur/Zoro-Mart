<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Utility;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AboutComponent extends Component
{
    public $hotline;
    public $about;
    public $main_search;
    public function mount()
    {
       $this->hotline = optional(Utility::first())->hotline; 
       $this->about = optional(Utility::first())->about;
    }
    public function render()
    {
        $live_search_products = [];
        if($this->main_search != null){
            $live_search_products = Product::where('name', 'LIKE', '%'.$this->main_search.'%')->orderBy('name', 'ASC')->get();
        }
        return view('livewire.user.about-component', ['live_search_products' => $live_search_products]);
    }
}
