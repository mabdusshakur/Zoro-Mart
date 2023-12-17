<?php

namespace App\Http\Livewire\User;

use App\Models\Utility;
use Livewire\Component;
use App\Models\SocialMedia;

class FooterComponent extends Component
{
    public $socialmedias;
    public $web_name;

    public function mount()
    {
        $this->socialmedias = SocialMedia::all();
        $this->web_name = optional(Utility::first())->web_name;
    }
    public function render()
    {
        return view('livewire.user.footer-component');
    }
}
