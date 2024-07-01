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
        $rjas = Rja::paginate(10);
        return view('livewire.submitted-rja', ['rjas' => $rjas]);
    }
}