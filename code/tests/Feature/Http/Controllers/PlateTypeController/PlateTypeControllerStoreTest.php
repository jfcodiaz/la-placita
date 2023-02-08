<?php

namespace Tests\Feature\Http\Controllers\PlateTypeController;

use Tests\TestCase;
use App\Models\Branch;
use App\Models\Company;
use App\Models\CompanyType;
use App\Models\PlateType;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlateTypeControllerStoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_should_create_platetype_for_company(): void 
    {
        $plateTypeName = 'Test Plate Type With Company';
        $url = route('plate-types.store');
        $urlIndex = route('plate-types.index');

        $company = Company::factory()->create([
            'company_type_id' => CompanyType::factory()->create()->id
        ]);

        $responseCompany = $this->post($url,[
            'name' => $plateTypeName,
            'company' => $company->id
        ]);

        $plateTypeBD = PlateType::where('name', $plateTypeName)->first();

        // $plateType = PlateType::find($responseCompany->status());
        // dd($responseCompany->status());

        // $responseCompany->assertRedirectToRoute('plate-type.index');
        $responseCompany->assertRedirect($urlIndex);

        $this->assertSame($plateTypeName, $plateTypeBD->name);
        $this->assertEquals($plateTypeBD->parent_type, Company::class);

    }

    public function test_user_should_create_platetype_for_branch(): void 
    {
        $plateTypeName = 'Test Plate Type With Branch';
        $url = route('plate-types.store');
        $branch = Branch::factory()->create();

        $responseCompany = $this->post($url,[
            'name' => $plateTypeName,
            'branch' => $branch->id
        ]);

        $plateTypeBD = PlateType::where('name', $plateTypeName)->first();

        $this->assertSame($plateTypeName, $plateTypeBD->name);
        $this->assertEquals($plateTypeBD->parent_type, Branch::class);

    }

}