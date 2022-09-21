<?php

namespace Tests\Feature\Models;

use App\Models\City;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CityTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        $city = new City();
        $this->assertNull($city->id);
        $city->name = 'City Test';
        $city->save();
        $this->assertIsNumeric($city->id);
    }
}
