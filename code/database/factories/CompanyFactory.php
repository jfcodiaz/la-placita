<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition()
    {
        return [
           'name' => fake()->company(),
           'created_at' => new DateTime(),
           'updated_at' => null
        ];
    }
}
