<?php

namespace App\Livewire;

use Livewire\Component;

class NewRja extends Component
{
    public function submit()
    {
        // Form gönderme işlemlerini burada gerçekleştirin
        session()->flash('message', 'Form successfully submitted.');
    }
    
    public function render()
    {
        return view('livewire.new-rja');
    }
}
