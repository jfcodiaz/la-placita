<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlateFactory extends Factory
{
    /** @return array<string, mixed> */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'created_at' => new DateTime(),
            'updated_at' => null
        ];
    }
}
