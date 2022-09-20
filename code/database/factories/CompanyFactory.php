<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** @return array<string, mixed> */
class CompanyFactory extends Factory
{
    public function definition()
    {
        return [
           'name' => fake()->company(),
        ];
    }
}
