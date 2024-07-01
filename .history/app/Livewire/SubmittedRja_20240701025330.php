<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;

class SubmittedRja extends Component
{
    use WithPagination;

    public function render()
    {
        
        $rjas = Rja::paginate($perPage);
        $perPage = $rjas->input('per_page', 24);
        return view('livewire.submitted-rja', ['rjas' => $rjas]);
    }
}