<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SocialMedia;

class SocialMediaComponent extends Component
{
    public $name,$icon;

    public function mount()
    {
        $social = SocialMedia::first();
        if($social){
            $this->name = $social->name;
            $this->icon = $social->icon;
        }
    }
    public function saveSocial()
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);
        $social = SocialMedia::first();
        if($social){
            $social->name = $this->name;
            $social->icon = $this->icon;
            $social->save();
        }else{
            session()->flash('warning','Social Media Not Found!');
        }
        session()->flash('success','Social Media has been saved successfully!');
    }
    public function render()
    {
        return view('livewire.admin.social-media-component')->layout('layouts.admin');
    }
}
