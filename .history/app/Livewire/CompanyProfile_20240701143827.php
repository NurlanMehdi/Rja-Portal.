<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Company;

class CompanyProfile extends Component
{
    public $companies;

    public function mount()
    {
        $this->companies = Company::all();
    }

    public function delete($id)
    {
        Company::find($id)->delete();
    }

    public function render()
    {
        $companies = Company::paginate(10);
        return view('livewire.company-profile', ['companies' => $companies]);
    }
}
