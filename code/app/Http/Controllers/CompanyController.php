<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Models\CompanyType;

class CompanyController extends Controller{
    public function store(StoreCompanyRequest $request) {
        $company = Company::create([
          'name' => $request->post('name'),
          'company_type_id' => $request->post('company_type_id')
        ]);
        var_dump($company);
    }

    public function create() {
      return view('Company.create', [
        'companyTypes' => CompanyType::all()
      ]);
    }
}
