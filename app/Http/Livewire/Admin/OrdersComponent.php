<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrdersComponent extends Component
{
    public function view_orders($id)
    {
        return redirect()->route('admin.orders.details', ['id' => $id]);
    }
    public function render()
    {
        $orders = Order::all();
        return view('livewire.admin.orders-component', ['orders'=>$orders])->layout('layouts.admin');
    }
}
