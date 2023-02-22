<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('collaborator_types', function (Blueprint $table) {
            $table->unsignedBigInteger('company_type_id')->nullable();
            $table->foreign('company_type_id')
                ->references('id')
                ->on('company_types')
                ->cascadeOnDelete()
            ;
        });
    }

    public function down(): void
    {
        Schema::table('collaborator_types', function (Blueprint $table) {
            $table->dropForeign('collaborator_types_company_type_id_foreign');
            $table->dropColumn('company_type_id');
        });
    }
};
