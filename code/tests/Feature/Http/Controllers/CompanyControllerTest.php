<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyControllerTest extends TestCase {
    use RefreshDatabase;

    public function test_loged_user_should_create_company(): void 
    {
      $user = User::factory()->create();
      $urlStore = route('company.store');
      $data = [
        'name' => 'Lo que sea',
        'company_type_id' => 1
      ];
      
      $headers = [
        'Accept' => 'application/json'
      ];

      $response = $this->actingAs($user)->post($urlStore, $data, $headers);
      dd($response->content());
    }
}