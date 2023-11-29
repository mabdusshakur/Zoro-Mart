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
    public function addSocial()
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);
        $social = new SocialMedia();
        $social->name = $this->name;
        $social->icon = $this->icon;
        $social->save();
        session()->flash('success','Social Media has been created successfully!');
    }
    public function saveSocial($id)
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);
        $social = SocialMedia::where('id',$id);
        if($social){
            $social->name = $this->name;
            $social->icon = $this->icon;
            $social->save();
        }else{
            session()->flash('warning','Social Media Not Found!');
        }
        session()->flash('success','Social Media has been saved successfully!');
    }
    public function deleteSocial($id)
    {
        $social = SocialMedia::where('id',$id);
        if($social){
            $social->delete();
        }else{
            session()->flash('warning','Social Media Not Found!');
        }
        session()->flash('success','Social Media has been deleted successfully!');
    }
    public function render()
    {
        $socials = SocialMedia::all();
        return view('livewire.admin.social-media-component',['socials' => $socials])->layout('layouts.admin');
    }
}
