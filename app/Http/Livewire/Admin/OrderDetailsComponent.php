<?php

namespace App\Http\Livewire\Admin;

use App\Mail\OrderProgressMail;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

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
        if ($this->order->save()) {
            session()->flash('success', 'Order status has been updated successfully!');
            $mail_data = [
                'subject' => 'Order Status Updated',
                'email' => $this->order->user->email,
                'buyer_name' => $this->order->user->name,
                'order_status' => $this->status,
                'order_id' => $this->order->id,
            ];
            if (Mail::to($mail_data['email'])->send(new OrderProgressMail($mail_data))) {
                session()->flash('success', 'Order status email has been sent successfully!');
            } else {
                session()->flash('error', 'Mail send failed!');
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.order-details-component')->layout('layouts.admin');
    }
}
