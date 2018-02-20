<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellingPointsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // create selling points table
        Schema::create('selling_points', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->float('latitude');
            $table->float('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('selling_points');
    }

}
