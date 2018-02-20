<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePainsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pains', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->comment = "catégorie du pain, fk to categories table, column id";
            $table->string('name')->comment = "nom du pain";
            $table->string('description')->comment = "description du pain";
            $table->float('price_per_kilo')->comment = "prix au kilo";
            $table->integer('weight')->comment = "poids du pain en grammes";
            $table->float('price')->comment = "prix du pain en unité";
            $table->string('photo1')->comment = "première photo du pain";
            $table->string('photo2')->comment = "deuxième photo du pain";
            $table->string('photo3')->comment = "troisième photo du pain";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('pains');
    }

}
