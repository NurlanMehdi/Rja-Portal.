<?php

namespace App\Livewire;

use Livewire\Component;

class ApprovedRja extends Component
{
    public function render()
    {
        $rjas = Rja::where('status', Rja::STATUS_APPROVED)->paginate($this->perPage);
        
        return view('livewire.approved-rja', ['rjas' => $rjas]);
    }
}
