<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('plate_types', function (Blueprint $table): void {
            $table->unsignedBigInteger('parent_id');
            $table->string('parent_type');
        });
    }

    public function down(): void
    {
        Schema::table('plate_types', function (Blueprint $table): void {
            $table->dropColumn('parent_id');
            $table->dropColumn('parent_type');
        });
    }
};
