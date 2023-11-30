<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class BannerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.banner-component')->layout('layouts.admin');
    }
}
