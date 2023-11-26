<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class AboutComponent extends Component
{
    public $hotline;
    public function render()
    {
        return view('livewire.user.about-component');
    }
}
