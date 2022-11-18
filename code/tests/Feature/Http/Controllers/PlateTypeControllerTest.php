<?php

namespace Tests\Feature\Http\Controller;

use App\Models\Branch;
use App\Models\Company;
use App\Models\CompanyType;
use App\Models\PlateType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlateTypeControllerTest extends TestCase
{
    // use RefreshDatabase;

    public function test_user_should_create_platetype(): void
    {
        $url = route('plate-type.store');

        $response = $this->post($url,[
            'name' => 'Test Plate Type With Branch',
            'branch' => Branch::factory()->create()->id
        ]);

        $plateType = PlateType::find($response->content());

        $responseCompany = $this->post($url,[
            'name' => 'Test Plate Type With Company',
            'company' => Company::factory()->create([
                'company_type_id' => CompanyType::factory()->create()->id
            ])->id
        ]);

        $plateType = PlateType::find($responseCompany->content());

        dd($plateType->parent);
    }
}