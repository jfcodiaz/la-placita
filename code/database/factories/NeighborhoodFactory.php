<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class NeighborhoodFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->streetName,
            'zip_code' => $this->faker->postcode,
            'created_at' => new DateTime(),
            'updated_at' => null
        ];
    }
}
