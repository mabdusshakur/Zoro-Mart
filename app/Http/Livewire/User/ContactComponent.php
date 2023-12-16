<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Utility;
use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactComponent extends Component
{
    public $name, $email, $message, $subject , $owner_email;
    public function mount()
    {
        if (Auth::check()) {
            $this->name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $this->email = Auth::user()->email;
        }
        $this->owner_email = optional(Utility::first())->owner_email;
    }
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

        if (Mail::to($this->owner_email)->send(new ContactMail($mall_data))) {
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
