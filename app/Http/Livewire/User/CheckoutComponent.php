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

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total = $this->total_price;
        $order->status = 'ordered';
        $order->payment_method = $this->payment_method;
        if($order->save())
        {
            foreach($this->cartItems as $item)
            {
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
    }
    public function render()
    {
        return view('livewire.user.checkout-component');
    }
}
