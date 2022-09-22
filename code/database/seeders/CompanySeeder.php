<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\CompanyType;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        CompanyType::all()->each(function (CompanyType $CompanyType): void {
            Company::factory(5)->create([
                'type_id' => $CompanyType->id
            ]);
        });
    }
}
