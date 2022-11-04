<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlateTypeFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'code' => $this->faker->randomNumber(4, false),
            'created_at' => new DateTime(),
            'updated_at' => null
        ];
    }
}
