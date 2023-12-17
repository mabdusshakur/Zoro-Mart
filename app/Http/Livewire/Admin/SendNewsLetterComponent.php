<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\NewsLetter;
use App\Mail\NewsLetterMail;
use Illuminate\Support\Facades\Mail;

class SendNewsLetterComponent extends Component
{
    public $subject, $news;

    public function sendNews()
    {
        $this->validate([
            'subject' => 'required',
            'news' => 'required'
        ]);
        $subscribers = NewsLetter::where('status', 1)->get();
        $mail_data = [
            'subject' => $this->subject,
            'news' => $this->news
        ];
        
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsLetterMail($mail_data));
        }
        session()->flash('success', 'News letter sent successfully!');
        $this->reset(['subject', 'news']);
    }
    public function render()
    {
        return view('livewire.admin.send-news-letter-component')->layout('layouts.admin');
    }
}
