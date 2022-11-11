<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\CollaboratorType;

class CollaboratorTypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var CollaboratorType $collaborator_type */
        $collaborator_type = new CollaboratorType();
        $this->assertNull($collaborator_type->id);
        $collaborator_type->code = 'OW';
        $collaborator_type->name = 'Dueño';
        $collaborator_type->save();
        $this->assertIsNumeric($collaborator_type->id);
    }
}
