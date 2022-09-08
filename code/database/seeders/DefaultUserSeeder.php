<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'firstname' => 'client',
            'username' => 'client',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'firstname' => 'owner',
            'username' => 'owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'firstname' => 'employee',
            'username' => 'employee',
            'email' => 'employee@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
