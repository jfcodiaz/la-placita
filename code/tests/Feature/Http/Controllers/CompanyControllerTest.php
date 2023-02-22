<?php

namespace Tests\Feature\Controllers;

use App\Models\Company;
use App\Models\CompanyType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_loged_user_should_create_company(): void
    {
        $user = User::factory()->create();
        $urlStore = route('companies.store');
        $data = [
        'name' => 'Lo que sea',
        'company_type_id' => 1
        ];
        $response = $this->actingAs($user)->post($urlStore, $data);
        $urlIndex = route('companies.index');
        $response->assertStatus(302);
        $response->assertRedirect($urlIndex);
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
        $user = User::factory()->create();
        $firstCompanyType = CompanyType::all()->first();

        $companies = Company::factory(3)->create([
        'company_type_id' => $firstCompanyType
        ]);


        dd($companies);
    }
}
