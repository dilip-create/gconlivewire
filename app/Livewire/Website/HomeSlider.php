<?php
namespace App\Livewire\Website;
use Livewire\Component;
use App\Models\TblGbooking;
class HomeSlider extends Component
{
    public function render()
    {
        $sliders=TblGbooking::where(['status' => '1', 'deleteStatus' => '0'])->get();
        // dd($sliders);
        return view('livewire.website.home-slider',compact('sliders'));
    }
}
