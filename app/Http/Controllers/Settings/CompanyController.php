<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyMail;

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
            'emails.*' => 'nullable|email|max:255',
        ]);

        $company = Company::create([
            'company_name' => $request->company_name,
        ]);

       

        if ($request->emails) {
            foreach ($request->emails as $email) {
                if ($email) {
                    CompanyMail::create([
                        'company_id' => $company->id,
                        'email' => $email,
                    ]);
                }
            }
        }

        return redirect()->route('company.index')->with('success', 'Company added successfully.');
    }

    public function edit(Company $company)
    {
        $company->load('emails');
        return view('settings.company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'emails.*' => 'nullable|email|max:255',
        ]);

        $company->update([
            'company_name' => $request->company_name,
        ]);

        CompanyMail::where('company_id', $company->id)->delete();

        if ($request->emails) {
            foreach ($request->emails as $email) {
                if ($email) {
                    CompanyMail::create([
                        'company_id' => $company->id,
                        'email' => $email,
                    ]);
                }
            }
        }

        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        CompanyMail::where('company_id', $company->id)->delete();
        $company->delete();

        return redirect()->route('company.index')->with('success', 'Company deleted successfully.');
    }
}
