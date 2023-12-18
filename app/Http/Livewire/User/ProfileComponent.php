<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ProfileComponent extends Component
{
    public $first_name, $last_name, $current_password, $new_password, $confirm_password;
    public $phone, $address_1, $address_2, $city, $zipcode, $country;

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->phone = auth()->user()->phone;
        $this->address_1 = auth()->user()->address_1;
        $this->address_2 = auth()->user()->address_2;
        $this->city = auth()->user()->city;
        $this->zipcode = auth()->user()->zipcode;
        $this->country = auth()->user()->country;
    }
    public function saveProfile()
    {
        $this->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'phone' => 'required|min:10',
            'address_1' => 'required|min:10',
            'address_2' => 'nullable',
            'city' => 'required|min:3',
            'zipcode' => 'required|min:3',
            'country' => 'required|min:3',
        ]);
        $user = auth()->user();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->phone = $this->phone;
        $user->address_1 = $this->address_1;
        $user->address_2 = $this->address_2;
        $user->city = $this->city;
        $user->zipcode = $this->zipcode;
        $user->country = $this->country;
        if ($user->save()) {
            session()->flash('success', 'Profile has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }

    }

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);
        $user = auth()->user();
        if (\Hash::check($this->current_password, $user->password)) {
            $user->password = \Hash::make($this->new_password);
            $user->save();
            session()->flash('success', 'Password has been updated successfully!');
        } else {
            session()->flash('error', 'Current password is incorrect!');
        }
    }
    public function render()
    {
        return view('livewire.user.profile-component');
    }
}
