<?php

use App\Models\CollaboratorType;
use App\Models\CompanyType;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $resturant = CompanyType::query()->where('code', 'RESTAURANT')->first();
        $store =  CompanyType::query()->where('code', 'COMMERCE')->first();

        CollaboratorType::create([
            'code' => 'OWNER',
            'name' => 'Dueño',
            'company_type_id' => null
        ]);

        CollaboratorType::create([
            'code' => 'ADMIN',
            'name' => 'Administrador',
            'company_type_id' => null
        ]);

        CollaboratorType::create([
            'code' => 'DELIVERY',
            'name' => 'Repartidor',
            'company_type_id' => null
        ]);

        CollaboratorType::create([
            'code' => 'STORE',
            'name' => 'Almacen',
            'company_type_id' => $store->id
        ]);

        CollaboratorType::create([
            'code' => 'CHEF',
            'name' => 'Cocinero',
            'company_type_id' => $resturant->id
        ]);
    }

    public function down(): void
    {
        CollaboratorType::truncate();
    }
};
