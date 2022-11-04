<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'indoor_number' => $this->faker->buildingNumber(),
            'lat' => $this->faker->latitude(),
            'lon' => $this->faker->longitude(),
            'created_at' => new DateTime(),
            'updated_at' => null
        ];
    }
}
