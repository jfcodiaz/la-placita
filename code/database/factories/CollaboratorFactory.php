<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CollaboratorFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition()
    {
        return [
            'user_id' => null,
            'company_id' => null,
            'collaborator_type_id' => null,
        ];
    }
}
