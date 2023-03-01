<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\CompanyType;
use App\Services\Companies\CreateCompanyService;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index');
    }

    public function store(StoreCompanyRequest $request, CreateCompanyService $createCompany)
    {
        $user = auth()->user();
        $createCompany(
            $request->post('name'),
            $request->post('company_type_id'),
            $user
        );
        $urlIndex = route('companies.index');

        return redirect($urlIndex);
    }

    public function create()
    {
        return view('company.create', [
        'companyTypes' => CompanyType::all()
        ]);
    }
}
