<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CollaboratorTypeFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition()
    {
        return [
            'code' => fake()->randomElement(['AA','BB','CC']),
            'name' => fake()->jobTitle,
        ];
    }
}
