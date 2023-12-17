<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\NewsLetter;

class NewsLetterComponent extends Component
{
    public $email;
    public function subscribeNewsLetter()
    {
        $this->validate([
            'email' => 'required|email|unique:news_letters,email'
        ]);
        NewsLetter::creat([
            'email' => $this->email,
            'status' => 1
        ]);
        session()->flash('success', 'You have subscribed successfully!');
        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.user.news-letter-component');
    }
}
