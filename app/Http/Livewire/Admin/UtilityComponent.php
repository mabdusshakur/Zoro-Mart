<?php

namespace App\Http\Livewire\Admin;

use App\Models\Utility;
use Livewire\Component;

class UtilityComponent extends Component
{
    public $hotline,$about,$isOldAvailable;

    public function mount()
    {
        $utility = Utility::first();
        if($utility){
            $this->isOldAvailable = true;
            $this->hotline = $utility->hotline;
            $this->about = $utility->about;
        }
    }

    public function addUtility()
    {
        $this->validate([
            'hotline' => 'required',
            'about' => 'required',
        ]);
        $utility = new Utility();
        $utility->hotline = $this->hotline;
        $utility->about = $this->about;
        $utility->save();
        session()->flash('success','Utility has been created successfully!');
    }

    public function saveUtility()
    {
        $this->validate([
            'hotline' => 'required',
            'about' => 'required',
        ]);
        $utility = Utility::first();
        if($utility){
            $utility->hotline = $this->hotline;
            $utility->about = $this->about;
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
