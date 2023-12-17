<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrdersComponent extends Component
{
    public function render()
    {
        $orders = Order::all();
        return view('livewire.admin.orders-component', ['orders'=>$orders])->layout('layouts.admin');
    }
}
