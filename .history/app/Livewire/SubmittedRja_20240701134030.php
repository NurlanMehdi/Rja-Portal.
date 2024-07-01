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
      //  $perPage = $request->input('per_page', 24);
        $rjas = Rja::where('status','=',0)->paginate(10);
        
        return view('livewire.submitted-rja', ['rjas' => $rjas]);
    }
}