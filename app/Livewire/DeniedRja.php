<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;

class DeniedRja extends Component
{
    public function render()
    {
        $rjas = Rja::where('status', Rja::STATUS_REJECTED)->paginate(10);
        
        return view('livewire.denied-rja', ['rjas' => $rjas]);
    }
}
