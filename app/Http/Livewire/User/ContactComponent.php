<?php

namespace App\Http\Livewire\User;

use App\Mail\ContactMail;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactComponent extends Component
{
    public $name, $email, $message, $subject;
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

        $mall_data = [
            'subject' => $this->subject,
            'email' => $this->email,
            'name' => $this->name,
            'message' => $this->message,
        ];

        if (Mail::to("owner@email.com")->send(new ContactMail($mall_data))) {
            session()->flash('success', 'Your message has been sent successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }

        $this->reset(['name', 'email', 'message']);
    }
    public function render()
    {
        return view('livewire.user.contact-component');
    }
}
