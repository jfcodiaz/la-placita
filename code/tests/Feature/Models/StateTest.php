<?php

namespace Tests\Feature\Models;

use App\Models\Country;
use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StateTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        //** @var Country $country */
        $country = Country::factory()->create();
        $state = new State();
        $state->name = 'State Test';
        $this->assertNull($state->id);
        $state->country()->associate($country);
        $state->save();
        $this->assertIsNumeric($state->id);
        $this->assertSame($country, $state->country);

        //** @var State $state */
        $index = $country->states->search(function (State $item) use ($state): bool {
            return $state->id === $item->id;
        });

        $stateFound = $country->states->get($index);
        $this->assertSame($state->id, $stateFound->id);
    }
}
