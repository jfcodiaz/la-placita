<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        State::all()->each(function (State $State): void {
            Address::factory(1)->create([
                'state_id' => $State->id,
                'country_id' => $State->country_id,
                'city_id' => City::first()
            ]);
        });
    }
}
