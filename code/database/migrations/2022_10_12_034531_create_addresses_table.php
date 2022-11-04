<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('number');
            $table->string('indoor_number');
            $table->string('lat');
            $table->string('lon');
            $table->timestamps();

            $table->unsignedBigInteger('country_id')
                ->nullable();

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('state_id')
                ->nullable();

            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->cascadeOnDelete();

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
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('addresses_country_id_foreign');
            $table->dropColumn('country_id');
            $table->dropForeign('addresses_state_id_foreign');
            $table->dropColumn('state_id');
            $table->dropForeign('addresses_city_id_foreign');
            $table->dropColumn('city_id');
        });

        Schema::dropIfExists('addresses');
    }
};
