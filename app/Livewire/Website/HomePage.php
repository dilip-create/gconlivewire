<?php
namespace App\Livewire\Website;
use Livewire\Component;
use Livewire\Attributes\Title;

class HomePage extends Component
{
    #[Title('Welcome to Gcon')]
    public function render()
    {
        return view('livewire.website.home-page');
    }
}
