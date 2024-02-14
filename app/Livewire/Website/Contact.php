<?php
namespace App\Livewire\Website;
use Livewire\Component;
use Livewire\Attributes\Title;

class Contact extends Component
{
    #[Title('Contact us with Gcon')]
    public function render()
    {
        return view('livewire.website.contact');
    }
}
