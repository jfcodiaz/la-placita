<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\CompanyRepositoryTraits\GetCompaniesByOwner;

class CompanyRepository
{
    use GetCompaniesByOwner;

    public function __construct(
        private CollaboratorTypeRepository $collaboratorTypeRepository
    ) {
    }

    public function create(string $name, int $company_type_id): Company
    {
        return Company::create([
          'name' => $name,
          'company_type_id' => $company_type_id
        ]);
    }
}
