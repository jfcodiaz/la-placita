<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CollaboratorType;
use App\Models\Collaborator;

class CollaboratorSeeder extends Seeder
{
    public function run(): void
    {
        CollaboratorType::all()->each(function (CollaboratorType $CollaboratorType): void {
            Collaborator::factory(2)->create([
                'user_id' => 1,
                'collaborator_type_id' => $CollaboratorType->id,
                'company_id' => 1,
            ]);
        });

        CollaboratorType::all()->each(function (CollaboratorType $CollaboratorType): void {
            Collaborator::factory(2)->create([
                'user_id' => 2,
                'collaborator_type_id' => $CollaboratorType->id,
                'company_id' => 1,
            ]);
        });

        CollaboratorType::all()->each(function (CollaboratorType $CollaboratorType): void {
            Collaborator::factory(2)->create([
                'user_id' => 3,
                'collaborator_type_id' => $CollaboratorType->id,
                'company_id' => 1,
            ]);
        });
    }
}
