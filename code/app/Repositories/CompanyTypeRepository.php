<?php

namespace App\Repositories;

use App\Models\CompanyType;

class CompanyTypeRepository {
    public function getRestaurantType(): CompanyType 
    {
        return CompanyType::query()->where('code', 'RESTAURANT')->first();
    }
}
