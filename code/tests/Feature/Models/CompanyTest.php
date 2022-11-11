<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Company;
use App\Models\CompanyType;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        /** @var companyType $companyType */
        $companyType = companyType::factory()->create();
        $company = new Company();
        $company->name = 'Testing Inc';
        $this->assertNull($company->id);
        $company->companyType()->associate($companyType);
        $company->save();
        $this->assertIsInt($company->id);
        $this->assertSame($company->companyType, $companyType);
        $index = $companyType->companies->search(function (Company $item) use ($company): bool {
            return $company->id === $item->id;
        });

        /* @var Company*/
        $companyFound = $companyType->companies->get($index);
        $this->assertSame($company->id, $companyFound->id);
    }
}
