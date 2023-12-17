<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SendNewsLetterComponent extends Component
{
    public $subject, $news;

    public function sendNews()
    {
        
    }
    public function render()
    {
        return view('livewire.admin.send-news-letter-component')->layout('layouts.admin');
    }
}
