<?php

namespace Tests\Feature\Controllers;

use App\Models\Collaborator;
use App\Models\CollaboratorType;
use App\Models\Company;
use App\Models\CompanyType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_loged_user_should_create_company(): void
    {
        $user = User::factory()->create();
        $urlStore = route('companies.store');
        $name = $this->faker()->words(3, true);
        $data = [
            'name' => $name,
            'company_type_id' => 1
        ];
        $response = $this->actingAs($user)->post($urlStore, $data);
        $urlIndex = route('companies.index');
        $response->assertStatus(302);
        $response->assertRedirect($urlIndex);

        $collaboratorType = CollaboratorType::query()
            ->where('code', 'OWNER')
            ->first();

        $company = Company::query()->where('name', $name)->first();
        $this->assertNotNull($company);

        $collaborators = Collaborator::query()->where([
            'user_id' => $user->id
        ])->get();

        $this->assertCount(1, $collaborators);
        $collaborador = $collaborators->first();
        $this->assertSame($company->id, $collaborador->company_id);
        $this->assertSame(
            $collaboratorType->id,
            $collaborador->collaborator_type_id
        );
    }

    public function test_index_should_accesible()
    {
        $user = User::factory()->create();
        $urlIndex = route('companies.index');
        $response = $this->actingAs($user)->get($urlIndex);
        $response->assertStatus(200);
        $cotent = $response->content();
        $this->assertStringContainsString('My Companies', $cotent);
    }

    public function test_index_should_show_companies_for_logged_user()
    {
        $this->markTestSkipped();
        $user = User::factory()->create();
        $firstCompanyType = CompanyType::all()->first();

        $companies = Company::factory(3)->create([
        'company_type_id' => $firstCompanyType
        ]);
    }
}
