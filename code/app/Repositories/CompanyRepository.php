<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function create(string $name, int $company_type_id): Company
    {
        return Company::create([
          'name' => $name,
          'company_type_id' => $company_type_id
        ]);
    }
}
