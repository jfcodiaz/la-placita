<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\City;
use App\Models\Neighborhood;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NeighborhoodTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var City $city */
        $city = City::factory()->create();
        $neighborhood = new Neighborhood();
        $neighborhood->name = 'Neighborhood Test';
        $neighborhood->zip_code = 12345;
        $this->assertNull($neighborhood->id);
        $neighborhood->city()->associate($city);
        $neighborhood->save();
        $this->assertIsInt($neighborhood->id);
        $this->assertSame($city, $neighborhood->city);
        $index = $city->neighborhoods->search(function (Neighborhood $item) use ($neighborhood): bool {
            return $neighborhood->id === $item->id;
        });

        /* @var Neighborhood */
        $neighborhoodFound = $city->neighborhoods->get($index);
        $this->assertSame($neighborhood->id, $neighborhoodFound->id);
    }
}
