<?php

namespace Tests\Feature;

use App\Models\PlateType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlateTypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        $plate_type = new PlateType();
        $this->assertNull($plate_type->id);
        $plate_type->code = 'PTCT';
        $plate_type->name = 'Plate type test';
        $plate_type->save();
        $this->assertIsNumeric($plate_type->id);
    }
}
