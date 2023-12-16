<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\SocialMedia;

class FooterComponent extends Component
{
    public $socialmedias;

    public function mount()
    {
        $this->socialmedias = SocialMedia::all();
    }
    public function render()
    {
        return view('livewire.user.footer-component');
    }
}
