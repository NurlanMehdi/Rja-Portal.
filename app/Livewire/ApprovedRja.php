<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;

class ApprovedRja extends Component
{
    public function render()
    {
        $rjas = Rja::with('companies')->where('status',Rja::STATUS_APPROVED)->paginate(10);
        
        return view('livewire.approved-rja', ['rjas' => $rjas]);
    }
}
