<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;

class DeniedRja extends Component
{
    public function render()
    {
        return view('livewire.denied-rja');
    }
}
