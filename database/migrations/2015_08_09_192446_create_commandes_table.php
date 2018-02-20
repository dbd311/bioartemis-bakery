<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('commandes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('no_commande')->unique();
            $table->integer('client')->comment = "fk to users table, column id";
            $table->integer('statut')->default(0)->comment = "0: en attente de validation, 1: valide mais non-reglé, 2: réglé, -1: annulé";
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('commandes');
    }

}
