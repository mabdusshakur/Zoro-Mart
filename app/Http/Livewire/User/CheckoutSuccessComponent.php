<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use App\Mail\OrderProgressMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutSuccessComponent extends Component
{
    public $userName;
    public function mount()
    {
        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $session = $stripe->checkout->sessions->retrieve(session()->get('checkout_session_id'));
            if (!$session) {
                throw new \Exception("Invalid Checkout Session ID");
            }
            if (!$session->payment_status == "paid") {
                throw new \Exception("Invalid Payment Status");
            }
            if ($session->status == "complete") {
                $order = Order::where('transaction_id', $session->id)->first();
                if ($order && $order->status == "unpaid") {
                    $order->status = "paid";
                    $order->save();
                    $mail_data = [
                        'subject' => 'Order Confirmation',
                        'email' => $order->user->email,
                        'buyer_name' => $order->user->first_name . ' ' . $this->order->user->last_name,
                        'order_status' => $order->status,
                        'order_id' => $order->id,
                    ];
                    Mail::to($mail_data['email'])->send(new OrderProgressMail($mail_data));
                }
            } else {
                throw new \Exception("Invalid Payment Status C");
            }
            session()->forget('checkout_session_id');
        } catch (\Throwable $th) {
            throw new \Exception("Invalid Checkout Session ID");
        }
    }
    public function render()
    {
        return view('livewire.user.checkout-success-component');
    }
}
