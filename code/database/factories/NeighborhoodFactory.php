<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class NeighborhoodFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->streetName,
            'zip_code' => $this->faker->postcode,
            'city_id' => null,
            'created_at' => new DateTime(),
            'updated_at' => null
        ];
    }
}
