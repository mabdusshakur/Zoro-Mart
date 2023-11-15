<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckoutSuccessComponent extends Component
{
    public $userName;
    public function mount()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $session = $stripe->checkout->sessions->retrieve(session()->get('checkout_session_id'));
        dd($this->userName);
        $customer = $stripe->customers->retrieve($session->customer);
       
        try {
            if (!$session) {
                throw new \Exception("Invalid Checkout Session ID");
            }
            // $customer = $stripe->customers->retrieve($session->customer);

            $order = Order::where('transaction_id', $session->id)->first();
            if($order && $order->status == "unpaid")
            {
              $order->status = "paid";
              $order->save();    
            }
        } catch (\Throwable $th) {
            throw new \Exception("Invalid Checkout Session ID");
        }
    }
    public function render()
    {
        return view('livewire.user.checkout-success-component');
    }
}
