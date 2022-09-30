<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        Country::all()->each(function (Country $country): void {
            State::factory(4)->create([
                'country_id' => $country->id
            ]);
        });
    }
}
