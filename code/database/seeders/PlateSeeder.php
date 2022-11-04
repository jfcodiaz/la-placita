<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlateType;
use App\Models\Plate;

class PlateSeeder extends Seeder
{
    public function run(): void
    {
        PlateType::all()->each(function (PlateType $PlateType): void {
            Plate::factory(4)->create([
                'plate_type_id' => $PlateType->id
            ]);
        });
    }
}
