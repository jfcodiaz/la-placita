<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function down(): void
    {
        Schema::table('neighborhoods', function (Blueprint $table): void {
            $table->dropForeign('neighborhoods_city_id_foreign');
        });
    }
};
