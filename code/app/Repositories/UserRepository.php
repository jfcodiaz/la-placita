<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function createOneByFactory(): User
    {
        return User::factory()->create();
    }
}
