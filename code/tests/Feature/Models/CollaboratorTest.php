<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Collaborator;
use App\Models\User;
use App\Models\CompanyType;
use App\Models\Company;
use App\Models\CollaboratorType;

class CollaboratorTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var user $user */
        /** @var company $collaboratorType */
        /** @var collaboratorType $collaboratorType */
        $user = User::factory()->create();
        $companyType = CompanyType::factory()->create();
        $company = Company::factory()->make();
        $collaboratorType = CollaboratorType::factory()->create();

        $collaborator = new Collaborator();
        $company->companyType()->associate($companyType);
        $company->save();
        $collaborator->user()->associate($user);
        $collaborator->company()->associate($company);
        $collaborator->collaboratorType()->associate($collaboratorType);
        $this->assertNull($collaborator->id);
        $collaborator->save();
        $this->assertIsInt($collaborator->id);
        $this->assertSame($collaborator->user, $user);
        $this->assertSame($collaborator->company, $company);
        $this->assertSame($collaborator->collaboratorType, $collaboratorType);
    }
}
