<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Contact;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ContactComponent extends Component
{
    public $hotline;
    public $name, $email, $message;
    public $main_search;
    public function contact()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('success', 'Your message has been sent successfully!');
        $this->reset(['name', 'email', 'message']);
    }
    public function render()
    {
        $live_search_products = [];
        if ($this->main_search != null) {
            $live_search_products = Product::where('name', 'LIKE', '%' . $this->main_search . '%')->orderBy('name', 'ASC')->get();
        }
        return view('livewire.user.contact-component', ['live_search_products' => $live_search_products]);
    }
}
