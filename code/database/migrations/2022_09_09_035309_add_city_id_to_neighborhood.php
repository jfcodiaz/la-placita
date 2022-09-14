<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('neighborhoods', function (Blueprint $table): void {
            $table->unsignedBigInteger('city_id')
                ->nullable();

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('neighborhoods', function (Blueprint $table): void {
            $table->dropColumn('city_id');
        });
    }
};
