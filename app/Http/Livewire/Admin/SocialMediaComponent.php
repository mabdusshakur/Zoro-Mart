<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SocialMedia;

class SocialMediaComponent extends Component
{
    public $name,$icon,$link;
    public $update_name,$update_icon,$update_link;

    public function mount()
    {

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
        $social->link = $this->link;
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
            $social->link = $this->link;
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
        $social_medias = SocialMedia::all();
        return view('livewire.admin.social-media-component',['social_medias' => $social_medias])->layout('layouts.admin');
    }
}
