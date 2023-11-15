<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CheckoutSuccessComponent extends Component
{
    public function mount()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $session = $stripe->checkout->sessions->retrieve(session()->get('checkout_session_id'));
       
        try {
            if (!$session) {
                throw new \Exception("Invalid Checkout Session ID");
            }
            $customer = $stripe->customers->retrieve($session->customer);
            $order = Order::where('transaction_id', $session->id)->first();
            if($order && $order->status == "unpaid")
            {
              $order->status = "paid";
              $order->save();    
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function render()
    {
        return view('livewire.user.checkout-success-component');
    }
}
