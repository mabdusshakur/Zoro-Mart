<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class MobileSearchComponent extends Component
{
    public $main_search;
    public function viewProductDetails($id, $slug, $category_id, $sub_category_id)
    {
        return redirect()->route('user.product-details', ['id' => $id, 'slug' => $slug, 'category_id' => $category_id, 'sub_category_id' => $sub_category_id]);
    }
    public function render()
    {
        $live_search_products = [];
        if(strlen($this->main_search) > 3){
            $live_search_products = Product::where('name', 'LIKE', '%'.$this->main_search.'%')->orderBy('name', 'ASC')->get();
        }
        return view('livewire.user.mobile-search-component', ['live_search_products' => $live_search_products]);
    }
}
