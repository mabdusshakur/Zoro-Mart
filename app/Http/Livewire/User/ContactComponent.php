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
        return view('livewire.user.contact-component');
    }
}
