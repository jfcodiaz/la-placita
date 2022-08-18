<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role1 = Role::create(['name' => 'clientUser']);
        $role2 = Role::create(['name' => 'ownerUser']);
        $role3 = Role::create(['name' => 'employeeUser']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $role1 = Role::findByName('clientUser'); $role1->delete();
        $role2 = Role::findByName('ownerUser'); $role2->delete();
        $role3 = Role::findByName('employeeUser'); $role3->delete();
    }
};
