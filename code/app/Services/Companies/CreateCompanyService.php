<?php

namespace App\Services\Companies;

use App\Models\User;
use App\Repositories\CollaboratorRepository;
use App\Repositories\CollaboratorTypeRepository;
use App\Repositories\CompanyRepository;

class CreateCompanyService
{
    public function __construct(
        private CollaboratorTypeRepository $collaboratorTypeRepository,
        private CompanyRepository $companyRepository,
        private CollaboratorRepository $collaboratorRepository
    ) {
    }

    public function __invoke(string $name, int $company_type_id, User $user)
    {

        $company = $this->companyRepository->create($name, $company_type_id);

        $ownerType = $this->collaboratorTypeRepository->getOwnerType();

        $this->collaboratorRepository->create(
            $user->id,
            $company->id,
            $ownerType->id
        );

        return $company;
    }
}
