<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rja; // Assuming you have an Rja model

class RjaForm extends Component
{
    public $company_profile;
    public $maintenance_email;
    public $b2b_reference;
    public $diagnosis;
    public $labour_items = [];
    public $parts_items = [];

    protected $rules = [
        'company_profile' => 'required',
        'maintenance_email' => 'required|email',
        'b2b_reference' => 'required',
        'diagnosis' => 'required',
        'labour_items.*.cost' => 'required|numeric',
        'parts_items.*.number' => 'required',
        'parts_items.*.cost' => 'required|numeric',
    ];


    public function render()
    {
        return view('livewire.rja-form');
    }
}
