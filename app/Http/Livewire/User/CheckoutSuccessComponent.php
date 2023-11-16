<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CheckoutSuccessComponent extends Component
{
    public $cart_item_count, $cartItems;

    public $userName;
    public function mount()
    {   
        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();
        
        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $session = $stripe->checkout->sessions->retrieve(session()->get('checkout_session_id'));   
            if (!$session) {
                throw new \Exception("Invalid Checkout Session ID");
            }
            if(!$session->payment_status == "paid")
            {
                throw new \Exception("Invalid Payment Status");
            }
            if($session->status == "complete")
            {
                $order = Order::where('transaction_id', $session->id)->first();
                if($order && $order->status == "unpaid")
                {
                  $order->status = "paid";
                  $order->save();    
                  session()->forget('checkout_session_id');
                }
            }
            else
            {
                throw new \Exception("Invalid Payment Status C");
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
