<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;

class SubmittedRja extends Component
{
    use WithPagination;

    public $selectedRjas = [];

    public function approveSelected()
    {
        Rja::whereIn('id', $this->selectedRjas)->update(['status' => Rja::STATUS_APPROVED]);
        $this->selectedRjas = [];
    }

    public function rejectSelected()
    {
        Rja::whereIn('id', $this->selectedRjas)->update(['status' => Rja::STATUS_REJECTED]);
        $this->selectedRjas = [];
    }

    public function render()
    {
      //  $perPage = $request->input('per_page', 24);
        $rjas = Rja::where('status',, Rja::STATUS_SUBMITTED)->paginate(10);
        
        return view('livewire.submitted-rja', ['rjas' => $rjas]);
    }
}