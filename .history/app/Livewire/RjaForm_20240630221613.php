<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rja; // Assuming you have an Rja model
use Illuminate\Support\Facades\Auth;

class RjaForm extends Component
{
    public $companyProfile;
    public $maintenanceEmail;
    public $warrantyReference;
    public $diagnosisFindings;
    public $labour = [];
    public $parts = [];

    protected $rules = [
        'companyProfile' => 'required',
        'maintenanceEmail' => 'required|email',
        'warrantyReference' => 'required',
        'diagnosisFindings' => 'required',
        'labour.*.cost' => 'required|numeric|min:0',
        'parts.*.number' => 'required',
        'parts.*.cost' => 'required|numeric|min:0',
    ];

    public function mount()
    {
        $this->labour = [
            ['cost' => 0]
        ];

        $this->parts = [
            ['number' => '', 'cost' => 0]
        ];
    }

    public function addLabour()
    {
        $this->labour[] = ['cost' => 0];
    }

    public function addPart()
    {
        $this->parts[] = ['number' => '', 'cost' => 0];
    }

    public function removeLabour($index)
    {
        unset($this->labour[$index]);
        $this->labour = array_values($this->labour);
    }

    public function removePart($index)
    {
        unset($this->parts[$index]);
        $this->parts = array_values($this->parts);
    }

    public function submit()
    {
        $this->validate();

        Rja::create([
            'user_id' => Auth::id(),
            'company_profile' => $this->companyProfile,
            'maintenance_email' => $this->maintenanceEmail,
            'warranty_reference' => $this->warrantyReference,
            'diagnosis_findings' => $this->diagnosisFindings,
            'labour' => json_encode($this->labour),
            'parts' => json_encode($this->parts),
        ]);

        session()->flash('message', 'RJA submitted successfully.');
    }

    public function render()
    {
        return view('livewire.rja-form');
    }
}

