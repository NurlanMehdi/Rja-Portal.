<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        return view('settings.company.index', compact('companies'));
    }

    public function create()
    {
        return view('settings.company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        Company::create($request->all());

        return redirect()->route('company.index')->with('success', 'Company added successfully.');
    }

    public function edit(Company $company)
    {
        return view('settings.company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $company->update($request->all());

        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('company.index')->with('success', 'Company deleted successfully.');
    }
}
