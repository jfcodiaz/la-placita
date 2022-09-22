<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DefaultUserSeeder::class,
            CitySeeder::class,
            NeighborhoodSeeder::class,
            CompanyTypeSeeder::class,
            CompanySeeder::class,
        ]);
    }
}
