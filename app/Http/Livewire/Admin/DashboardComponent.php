<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashboardComponent extends Component
{
    public $total_user, $total_orders, $total_products, $total_categories, $total_subcategories, $total_sales;
    public function render()
    {
        return view('livewire.admin.dashboard-component')->layout('layouts.admin');
    }
}
