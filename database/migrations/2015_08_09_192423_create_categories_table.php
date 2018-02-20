<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // create categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // category id
            // set primary key
            //$table->primary('category_id');
            $table->string('category_name')->comment = "catégorie de pains";

            $table->string('description')->comment = "description de la catégorie";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('categories');
    }

}
