<?php

namespace App\Http\Livewire\Admin;

use App\Models\Utility;
use Livewire\Component;

class UtilityComponent extends Component
{
    public $hotline,$about;


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
