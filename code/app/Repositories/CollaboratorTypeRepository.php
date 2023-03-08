<?php

namespace App\Repositories;

use App\Models\CollaboratorType;

class CollaboratorTypeRepository
{
    public function getOwnerType(): CollaboratorType
    {
        return CollaboratorType::query()->where('code', 'OWNER')->first();
    }
}
