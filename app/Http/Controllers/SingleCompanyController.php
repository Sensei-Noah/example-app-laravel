<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;

class SingleCompanyController extends Controller
{
    public function show($companyName){
        
        $company = companies::where('name', $companyName)->get();
        //index'es are important for the 'check'
        $names = [
            'Apple' => 'Apple',
            'Samsung' => 'Samsung',
            'Tesla' => 'Tesla',
            'MSI' => 'MSI'
        ];
        return view('companies.singleCompany',[
            'companyNames' => $names[$companyName] ?? 'Company ' . $companyName . ' not found',
            'single_company' => $company
        ]);
    }
}
