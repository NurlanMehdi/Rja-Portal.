<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Rja;
use Illuminate\Support\Facades\Mail;

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

    
    public function sendRjaEmail()
    {
        $selectedRjas = Rja::with(['items', 'companies'])
            ->whereIn('id', $this->selectedRjas)
            ->get();

        foreach ($selectedRjas as $rja) {
            if ($rja->companies && $rja->companies->email) {
                $toMail = $rja->companies->email;       
                Mail::to($rja->companies->email)->send(new \App\Mail\RjaMail($rja));
            }
        }

        session()->flash('message', 'Emails sent successfully.');
        $this->selectedRjas = [];
    }

    public function render()
    {
      //  $perPage = $request->input('per_page', 24);
        $rjas = Rja::with('companies')->where('status',Rja::STATUS_SUBMITTED)->paginate(10);
        
        return view('livewire.submitted-rja', ['rjas' => $rjas]);
    }
}