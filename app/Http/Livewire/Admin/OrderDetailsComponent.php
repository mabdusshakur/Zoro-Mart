<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public $order;
    public $status;
    public function mount($id)
    {
        $this->order = Order::find($id);
    }
    public function updateStatus()
    {
        $this->order->status = $this->status;
        $this->order->save();
        session()->flash('success', 'Order status has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.order-details-component')->layout('layouts.admin');
    }
}
