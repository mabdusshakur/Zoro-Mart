<?php

namespace App\Http\Livewire\Admin;

use App\Models\SubCategory;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class DashboardComponent extends Component
{
    public $total_users, $total_orders, $total_products, $total_categories, $total_subcategories, $total_sales;

    public function mount()
    {
        $this->total_users = User::count();
        $this->total_orders = Order::count();
        $this->total_products = Product::count();
        $this->total_categories = Category::count();
        $this->total_subcategories = SubCategory::count();
        $this->total_sales = Order::where('status', 'delivered')->sum('total');
    }
    public function render()
    {
        return view('livewire.admin.dashboard-component')->layout('layouts.admin');
    }
}
