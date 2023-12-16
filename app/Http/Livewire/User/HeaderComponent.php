<?php

namespace App\Http\Livewire\User;

use App\Models\Utility;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $hotline;

    public function mount()
    {
        $this->hotline = optional(Utility::first())->hotline;
    }
    public function render()
    {
        return view('livewire.user.header-component');
    }
}
