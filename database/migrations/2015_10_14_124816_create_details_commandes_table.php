<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsCommandesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('details_commandes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_commande'); // fk commandes table id
            $table->integer('id_pain'); // fk pains table id
            $table->integer('quantite');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('details_commandes');
    }
}
