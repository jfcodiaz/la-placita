<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CollaboratorType;

class CollaboratorTypeSeeder extends Seeder
{
    public function run(): void
    {
        CollaboratorType::factory(5)->create();
    }
}
