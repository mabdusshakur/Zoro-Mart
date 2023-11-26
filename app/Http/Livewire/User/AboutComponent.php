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
       $this->hotline = Utility::find(1)->hotline; 
       $this->about = Utility::find(1)->about;
    }
    public function render()
    {
        return view('livewire.user.about-component');
    }
}
