<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Country;
use Livewire\Component;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public $cart_item_count, $cartItems;

    public $first_name, $last_name, $email, $phone, $address_1, $address_2, $city, $country, $zipcode, $notes, $payment_method;
    public $payment_options = [
        ['value' => "cod", 'label' => 'Cash On Delivery'],
        ['value' => "bip", 'label' => 'Binance Pay'],
        ['value' => "stripe", 'label' => 'Stripe'],
    ];

    public $countryList;

    public $total_price;
    public function mount()
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
        $this->address_1 = Auth::user()->address_1;
        $this->address_2 = Auth::user()->address_2;
        $this->city = Auth::user()->city;
        $this->country = Auth::user()->country;
        $this->zipcode = Auth::user()->zipcode;
        $this->countryList = Country::all();

        $this->cart_item_count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartItems = Cart::where('user_id', Auth::user()->id)->get();

        foreach ($this->cartItems as $item) {
            $this->total_price += $item->product->price * $item->quantity;
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address_1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
        ]);

        $allDetails = Auth::user()->update([
            'phone' => $this->phone,
            'address_1' => $this->address_1,
            'address_2' => $this->address_2,
            'city' => $this->city,
            'country' => $this->country,
            'zipcode' => $this->zipcode,
        ]);


        if ($this->payment_method == 'cod') {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->total = $this->total_price;
            $order->status = 'ordered';
            $order->payment_method = $this->payment_method;
            if ($order->save()) {
                foreach ($this->cartItems as $item) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $item->product_id;
                    $orderItem->quantity = $item->quantity;
                    $orderItem->price = $item->product->price;
                    $orderItem->save();
                    $item->delete();
                }
                return redirect()->route('user.home')->with('success', 'Your order has been placed successfully');
            }
        } else if ($this->payment_method == 'stripe') {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            foreach ($this->cartItems as $item) {
                $line_items[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $item->product->name,
                        ],
                        'unit_amount' => $item->product->price * 100,
                    ],
                    'quantity' => $item->quantity,
                ];
            }

            $checkout_session = $stripe->checkout->sessions->create([
                'line_items' => $line_items,
                'mode' => 'payment',
                'success_url' => route('user.checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('user.checkout.cancel'),
            ]);

            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->total = $this->total_price;
            $order->status = 'unpaid';
            $order->payment_method = $this->payment_method;
            $order->transaction_id = $checkout_session->id;
            session()->put('checkout_session_id', $checkout_session->id);

            if ($order->save()) {
                foreach ($this->cartItems as $item) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $item->product_id;
                    $orderItem->quantity = $item->quantity;
                    $orderItem->price = $item->product->price;
                    $orderItem->save();
                    $item->delete();
                }
                return redirect($checkout_session->url);
            }
        }
    }


    public function stripe_webhook()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        // This is your Stripe CLI webhook secret for testing your endpoint locally.
        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return response('', 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            return response('', 400);
        }

        // Handle the event
        switch ($event->type) {
            case 'checkout.session.completed':
                $paymentIntent = $event->data->object;
                $order = Order::where('transaction_id', $paymentIntent->id)->first();
                if ($order && $order->status == 'unpaid') {
                    $order->status = 'paid';
                    $order->save();
                }
            default:
                echo 'Received unknown event type ' . $event->type;
        }

        return response('');
    }
    public function render()
    {
        return view('livewire.user.checkout-component');
    }
}
