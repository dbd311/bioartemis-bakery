<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivraisonTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('livraisons', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_commande');
            $table->date('date_livraison');
            $table->string('adresse_livraison'); // fk users table id
            $table->integer('statut'); // 0: en attente de livraison, 1: livraison avec absence, 2: livraison avec succes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('livraisons');
    }

}
