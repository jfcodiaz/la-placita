<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var User $user */
        $user = User::factory()->make();
        $user->save();
        $this->assertIsInt($user->id);
    }
}
