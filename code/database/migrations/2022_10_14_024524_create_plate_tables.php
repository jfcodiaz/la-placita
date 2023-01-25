<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plate_types', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            $table->unsignedBigInteger('plate_type_id');

            $table->foreign('plate_type_id')
                ->references('id')
                ->on('plate_types')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('plates', function (Blueprint $table): void {
            $table->dropForeign('plates_plate_type_id_foreign');
        });

        Schema::dropIfExists('plates');

        Schema::dropIfExists('plate_types');
    }
};
