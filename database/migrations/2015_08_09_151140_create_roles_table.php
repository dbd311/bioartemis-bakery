<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // create role table
        Schema::create('roles', function (Blueprint $table) {
            $table->integer('role_id'); // role id

            $table->string('role_name'); // user role (0 = 'admin', 1='secreteriat', 2='customer', 3='visitor')                    

            $table->string('description'); // description of this role
            // set primary key
            $table->primary('role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('roles');
    }

}
