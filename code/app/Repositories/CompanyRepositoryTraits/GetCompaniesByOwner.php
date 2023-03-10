<?php

namespace App\Repositories\CompanyRepositoryTraits;

use App\Models\Company;
use App\Models\User;

trait GetCompaniesByOwner
{
    public function getCompaniesByOwner(User $user)
    {
        $ownerType = $this->collaboratorTypeRepository->getOwnerType();

        return Company::query()
        ->join('collaborators', 'companies.id', '=', 'collaborators.company_id')
        ->where('collaborators.user_id', '=', $user->id)
        ->where('collaborators.collaborator_type_id', '=', $ownerType->id)
        ->get()
        ;
    }
}
