<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'created_at' => new \DateTime(),
            'updated_at' => null
        ];
    }
}
