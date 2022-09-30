<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\CompanyType;

class CompanyTypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_save(): void
    {
        $company_type = new CompanyType();
        $this->assertNull($company_type->id);
        $company_type->code = 'RE';
        $company_type->name = 'Restaurant';
        $company_type->save();
        $this->assertIsNumeric($company_type->id);
    }
}
