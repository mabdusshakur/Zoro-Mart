<?php

namespace App\Http\Livewire\User;

use App\Models\Utility;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $utility;

    public function mount()
    {
        $this->utility = Utility::first();
    }
    public function render()
    {
        return view('livewire.user.header-component');
    }
}
