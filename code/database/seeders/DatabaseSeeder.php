<?php

namespace Database\Seeders;

use App\Models\CollaboratorType;
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
            CountrySeeder::class,
            StateSeeder::class,
            PlateTypeSeeder::class,
            PlateSeeder::class,
            AddressSeeder::class,
            CollaboratorTypeSeeder::class,
            CollaboratorSeeder::class,
        ]);
    }
}
