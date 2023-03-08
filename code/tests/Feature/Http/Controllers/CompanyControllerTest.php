<?php

namespace Tests\Feature\Controllers;

use App\Models\Collaborator;
use App\Models\CollaboratorType;
use App\Models\Company;
use App\Models\CompanyType;
use App\Models\User;
use App\Repositories\CompanyTypeRepository;
use App\Repositories\UserRepository;
use App\Services\Companies\CreateCompanyService;
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
        $companyTypeId = $this->app->get(CompanyTypeRepository::class)
            ->getRestaurantType()
            ->id;
        
        $user = $this->app->get(UserRepository::class)->createOneByFactory();

        $companies2 = $this->createCompany('company 1', $companyTypeId, $user);
        $companies2 = $this->createCompany('company 2', $companyTypeId, $user);
        $companies3 = $this->createCompany('company 3', $companyTypeId, $user);

        $urlIndex = route('companies.index');
        $response = $this->actingAs($user)->get($urlIndex);
    }

    private function createCompany(string $name, int $companyTypeId, User $user)
    {

        $companies1 = $this->app->get(CreateCompanyService::class)(
            $name, 
            $companyTypeId, 
            $user
        );
    }
}