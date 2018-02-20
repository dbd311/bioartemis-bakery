<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PainsTableSeeder
 *
 * @author duy
 */
use Illuminate\Database\Seeder;
use App\Concepts\Pain;

class PainsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('pains')->truncate();

        Pain::insert(array('category_id' => 1, 'name' => 'Blé multigraines', 'description' => 'Pain savoureux par son pur levain et par son goût des diverses graines (lin, sarasin, amaranthe) ou flocons de céréales bio ajoutés.
Pain boulé aux graines de lin brun, cameline, colza, blé germé et seigle germé.
Oméga 3 et 6 au rendez vous!!! Le plein de bien être assuré !', 
            'photo1' => 'img/pains/Ble_multigraines.PNG', 'photo2' => 'img/pains/Ble_multigraines_2.PNG', 
            'price_per_kilo' => 6, 'weight' => 400, 'price' => 2.60));
        Pain::insert(array('category_id' => 1, 'name' => 'Blé aux graines de lin', 'description' => 'Pain boulé aux graines de lin brun. La pate est au départ pétrie avec les graines de lin. Ainsi ces dernieres s\'assouplissent et se mastiquent très bien. Oméga 3 au rendez vous!!! Le plein de bien etre assuré !', 'photo1' => 'img/pains/Ble_graine_de_lin.PNG', 'price_per_kilo' => 6, 'weight' => 400, 'price' => 2.60));
    }

}
