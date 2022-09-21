<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->state,
            'created_at' => new DateTime(),
            'updated_at' => null,
            'country_id' => null
        ];
    }
}
