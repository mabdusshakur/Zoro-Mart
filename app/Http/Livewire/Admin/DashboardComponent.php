<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class DashboardComponent extends Component
{
    public $total_user, $total_orders, $total_products, $total_categories, $total_subcategories, $total_sales;

    public function mount()
    {
        $this->total_user = User::count();
        $this->total_orders = Order::count();
        $this->total_products = Product::count();
    }
    public function render()
    {
        return view('livewire.admin.dashboard-component')->layout('layouts.admin');
    }
}
