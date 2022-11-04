<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\State;

class AddressTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var Country $country */
        /** @var State $state */
        /** @var City $city */
        $country = Country::factory()->create();
        $state = State::factory()->create();
        $city = City::factory()->create();

        $address = new Address();
        $address->street = 'Street test';
        $address->number = '36';
        $address->indoor_number = 'A';
        $address->lat = '59.901549';
        $address->lon = '93.145141';
        $this->assertNull($address->id);
        $address->country()->associate($country);
        $address->state()->associate($state);
        $address->city()->associate($city);
        $address->save();
        $this->assertIsInt($address->id);
        $this->assertSame($country, $address->country);
        $this->assertSame($state, $address->state);
        $this->assertSame($city, $address->city);
    }
}
