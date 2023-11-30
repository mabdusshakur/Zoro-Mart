<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class BannerComponent extends Component
{
    public $banner_title, $banner, $banner_status;

    use WithFileUploads;

    public function add_banner()
    {
        $this->validate([
            'banner_title' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_status' => 'required'
        ]);
        $banner = new Banner();
        $banner->banner_title = $this->banner_title;
        $imageName = time() . '.' . $this->banner->getClientOriginalExtension();
        $img_location = $this->banner->storeAs('banner/images', $imageName, 'public');
        $banner->banner_image = $img_location;
        $banner->banner_status = $this->banner_status;
        $banner->save();
        session()->flash('success', 'Banner has been created successfully!');
    }
    public function delete_banner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        session()->flash('success', 'Banner has been deleted successfully!');
    }
    public function render()
    {
        $banners = Banner::all();
        return view('livewire.admin.banner-component', ['banners' => $banners])->layout('layouts.admin');
    }
}
