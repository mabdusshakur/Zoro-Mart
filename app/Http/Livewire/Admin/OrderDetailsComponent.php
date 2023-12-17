<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public $order;
    public function mount($id)
    {
        $this->order = Order::find($id);
    }
    public function render()
    {
        return view('livewire.admin.order-details-component');
    }
}
