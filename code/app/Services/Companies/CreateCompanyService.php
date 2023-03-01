<?php

namespace App\Services\Companies;

use App\Models\Collaborator;
use App\Models\CollaboratorType;
use App\Models\Company;
use App\Models\User;

class CreateCompanyService
{
    public function __invoke(string $name, int $company_type_id, User $user)
    {
        $company = Company::create([
        'name' => $name,
        'company_type_id' => $company_type_id
        ]);

        $ower = CollaboratorType::query()->where('code', 'OWNER')->first();

        Collaborator::create([
          'user_id' => $user->id,
          'company_id' => $company->id,
          'collaborator_type_id' => $ower->id
        ]);

        return $company;
    }
}
