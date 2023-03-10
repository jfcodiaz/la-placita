<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\CompanyType;
use App\Repositories\CompanyRepository;
use App\Services\Companies\CreateCompanyService;

class CompanyController extends Controller
{
    public function index(CompanyRepository $companyRepository)
    {
        $user = auth()->user();
        $companies = $companyRepository->getCompaniesByOwner($user);
        return view('company.index', [
            'companies' => $companies
        ]);
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
