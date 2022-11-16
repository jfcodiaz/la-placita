<?php

use App\Models\CompanyType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('company_types', function (Blueprint $table) {
            $table->unique('code');
            $table->string('code', 15)->change();
        });

        CompanyType::create([
            'name' => 'Restaurante',
            'code' => 'RESTAURANT'
        ]);

        $commerce = new CompanyType();
        $commerce->name = 'Tienda';
        $commerce->code = 'COMMERCE';
        $commerce->save();
    }

    public function down(): void
    {
        Schema::table('company_types', function (Blueprint $table) {
            $table->dropUnique('company_types_code_unique');
            $table->string('code', 15)->change();
        });

        CompanyType::query()->where('code', '=', 'COMMERCE')->first()->delete();
        CompanyType::query()
            ->where('code', '=', 'RESTAURANT')
            ->first()
            ->delete();
    }
};
