<?php

namespace Database\Seeders;

use App\Models\PlateType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlateTypeSeeder extends Seeder
{
    public function run(): void
    {
        PlateType::factory(4)->create();
    }
}
