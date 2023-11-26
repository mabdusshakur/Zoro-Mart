<?php

namespace App\Http\Livewire\User;

use App\Models\Utility;
use Livewire\Component;

class AboutComponent extends Component
{
    public $hotline;
    public $about;

    public function mount()
    {
       $this->hotline = optional(Utility::first())->hotline; 
       $this->about = optional(Utility::first())->about;
    }
    public function render()
    {
        return view('livewire.user.about-component');
    }
}
