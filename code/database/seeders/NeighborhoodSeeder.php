<?php

namespace Database\Seeders;

use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class NeighborhoodSeeder extends Seeder
{
    public function run(): void
    {
        Neighborhood::factory()->create([
            'name' => 'Juarez',
            'zip_code' => 55800
        ]);
        Neighborhood::factory()->create([
            'name' => 'Aldama',
            'zip_code' => 57399
        ]);
        Neighborhood::factory(199)->create();
    }
}
