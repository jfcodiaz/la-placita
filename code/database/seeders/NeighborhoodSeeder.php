<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class NeighborhoodSeeder extends Seeder
{
    public function run(): void
    {
        City::all()->each(function (City $city): void {
            Neighborhood::factory(20)->create([
                'city_id' => $city->id
            ]);
        });
    }
}
