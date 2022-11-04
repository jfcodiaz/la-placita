<?php

namespace Tests\Feature;

use App\Models\Plate;
use App\Models\PlateType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlateTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var PlateType $plate_type */
        $plate_type = PlateType::factory()->create();
        $plate = new Plate();
        $plate->name = 'Platillo test';
        $this->assertNull($plate->id);
        $plate->plateType()->associate($plate_type);
        $plate->save();
        $this->assertIsInt($plate->id);
        $this->assertSame($plate_type, $plate->plateType);
    }
}
