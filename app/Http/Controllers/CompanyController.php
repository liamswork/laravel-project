<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function displayCompanies()
    {
        $companies = Company::all(); // Fetch all records from the companies table
    
        return view('companies', ['companies' => $companies]);
    }
    
    public function displayCompany($slug)
    {
            try {
                $company = Company::where('slug', $slug)->firstOrFail();
                return view('company', ['company' => $company]);

            } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                return view('company404');
            }
    }
    
}
