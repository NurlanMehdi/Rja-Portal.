<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Company;

class CompanyForm extends Component
{
    public $company_name;
    public $description;

    protected $rules = [
        'company_name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        Company::create([
            'company_name' => $this->company_name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Company added successfully.');
        $this->reset(['company_name', 'description']);
        $this->emit('companyAdded');
    }

    public function render()
    {
        return view('livewire.company-form');
    }
}
