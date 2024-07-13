<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;

class DeniedRja extends Component
{
    public function render()
    {
        $rjas = Rja::with('companies')
        ->where('status', Rja::STATUS_REJECTED)
        ->orderBy('id', 'desc')
        ->paginate(10);
        
        return view('livewire.denied-rja', ['rjas' => $rjas]);
    }
}
