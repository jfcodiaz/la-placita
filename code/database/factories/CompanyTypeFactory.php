<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyTypeFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition()
    {
        return [
            'code' => fake()->randomLetter,
            'name' => fake()->jobTitle,
        ];
    }
}
