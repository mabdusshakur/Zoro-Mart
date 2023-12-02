<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class SearchComponent extends Component
{
    public $main_search;
    public function render()
    {
        $live_search_products = [];
        if($this->main_search != null){
            $live_search_products = Product::where('name', 'LIKE', '%'.$this->main_search.'%')->orderBy('name', 'ASC')->get();
        }
        return view('livewire.user.search-component', ['live_search_products' => $live_search_products]);
    }
}
