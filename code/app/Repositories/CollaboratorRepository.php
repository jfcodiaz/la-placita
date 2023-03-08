<?php

namespace App\Repositories;

use App\Models\Collaborator;

class CollaboratorRepository
{
    public function create(
        int $userId,
        int $companyId,
        int $ownerTypeId
    ): Collaborator {
        return Collaborator::create([
        'user_id' => $userId,
        'company_id' => $companyId,
        'collaborator_type_id' => $ownerTypeId
        ]);
    }
}
