<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SellingPointsTableSeeder
 *
 * @author duy
 */
use Illuminate\Database\Seeder;
use App\Concepts\SellingPoint;

class SellingPointsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('selling_points')->truncate();

        SellingPoint::insert(array('name' => 'Naturalia Metz', 'number' => '11 bis', 'street' => 'place du Forum', 'city' => 'Metz', 'country' => 'France', 'latitude' => 49.1177348, 'longitude' => 6.177755));
        SellingPoint::insert(array('name' => 'Naturalia Thionville', 'number' => '24', 'street' => 'Rue Brûlée', 'city' => 'Thionville', 'country' => 'France', 'latitude' => 49.35758089999999, 'longitude' => 6.165011899999968));
        SellingPoint::insert(array('name' => 'Marché Thionville', 'number' => '', 'street' => 'rue du Manège', 'city' => 'Thionville', 'country' => 'France', 'latitude' => 49.359507, 'longitude' => 6.165066));
        SellingPoint::insert(array('name' => 'Natur\'Halles', 'number' => '76A', 'street' => 'route de Longwy', 'city' => 'Lexy', 'country' => 'France', 'latitude' => 49.5342527, 'longitude' => 5.7651513));
        SellingPoint::insert(array('name' => 'Les vergers du plan d\'eau Briey', 'number' => '40', 'street' => 'Rue Carnot', 'city' => 'Briey', 'country' => 'France', 'latitude' => 49.248303, 'longitude' => 5.940251));
        SellingPoint::insert(array('name' => 'Balai des fées Metz', 'number' => '5', 'street' => 'rue Taison', 'city' => 'Metz', 'country' => 'France', 'latitude' => 49.118883, 'longitude' => 6.177315));
        SellingPoint::insert(array('name' => 'Marché Gorcy', 'number' => '', 'street' => '', 'city' => 'Gorcy', 'country' => 'France', 'latitude' => 49.533752, 'longitude' => 5.68498599));
        SellingPoint::insert(array('name' => 'Marché Fixem', 'number' => '', 'street' => '', 'city' => 'Fixe,', 'country' => 'France', 'latitude' => 49.443207, 'longitude' => 6.275272));
        SellingPoint::insert(array('name' => 'Marché Arlon', 'number' => '', 'street' => '', 'city' => 'Arlon', 'country' => 'Belgique', 'latitude' => 49.685136, 'longitude' => 5.81048));
    }

}
