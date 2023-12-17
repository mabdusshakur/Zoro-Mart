<?php

namespace App\Http\Livewire\Admin;

use App\Models\Utility;
use Livewire\Component;

class UtilityComponent extends Component
{
    public $hotline,$email,$about,$isOldAvailable;
    public $favicon, $logo, $web_name;
    public $old_favicon, $old_logo;
    public function mount()
    {
        $utility = Utility::first();
        if($utility){
            $this->isOldAvailable = true;
            $this->hotline = $utility->hotline;
            $this->about = $utility->about;
            $this->email = $utility->email;
            $this->old_favicon = $utility->favicon;
            $this->old_logo = $utility->logo;
            $this->web_name = $utility->web_name;
        }
    }

    public function addUtility()
    {
        $this->validate([
            'hotline' => 'required',
            'about' => 'required',
            'email' => 'required|email',
            'web_name' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg|',
            'favicon' => 'required|image|mimes:png|',
        ]);
        $utility = new Utility();
        $utility->hotline = $this->hotline;
        $utility->about = $this->about;
        $utility->email = $this->email;
        $utility->web_name = $this->web_name;
        $utility->logo = $this->logo->storeAs('utility/images', 'logo'.'.'.$this->logo->getClientOriginalExtension(), 'public');
        $utility->favicon = $this->favicon->storeAs('utility/images', 'favicon'.'.'.$this->favicon->getClientOriginalExtension(), 'public');
        $utility->save();
        session()->flash('success','Utility has been created successfully!');
    }

    public function saveUtility()
    {
        $this->validate([
            'hotline' => 'required',
            'about' => 'required',
            'email' => 'required|email',
        ]);
        $utility = Utility::first();
        if($utility){
            $utility->hotline = $this->hotline;
            $utility->about = $this->about;
            $utility->email = $this->email;
            $utility->web_name = $this->web_name;
            $utility->logo = $this->logo->storeAs('utility/images', 'logo'.'.'.$this->logo->getClientOriginalExtension(), 'public');
            $utility->favicon = $this->favicon->storeAs('utility/images', 'favicon'.'.'.$this->favicon->getClientOriginalExtension(), 'public');
            $utility->save();
        }else{
            session()->flash('warning','Utility Not Found!');
        }
        session()->flash('success','Utility has been saved successfully!');
    }
    
    public function render()
    {
        return view('livewire.admin.utility-component')->layout('layouts.admin');
    }
}
