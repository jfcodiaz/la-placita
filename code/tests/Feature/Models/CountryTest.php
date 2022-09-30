<?php

namespace Tests\Feature\Models;

use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CountryTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        $country = new Country();
        $this->assertNull($country->id);
        $country->name = 'TestCountry';
        $country->save();
        $this->assertIsNumeric($country->id);
    }
}
