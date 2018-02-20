<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersTableSeeder
 *
 * @author duy
 */
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->truncate();

        User::insert(array('email' => 'admin@bioartemis.fr', 'first_name' => 'admin', 'last_name' => 'admin', 'password' => Hash::make('Admin57100'), 'role_id' => 0, 'address' => '4 La Grande Rue', 'city' => 'Rouvres-En-Woëvre', 'country' => 'France'));
        User::insert(array('email' => 'contact@bioartemis.fr', 'first_name' => 'bioartemis', 'password' => Hash::make('Admin57100'), 'role_id' => 0, 'address' => '4 La Grande Rue', 'city' => 'Rouvres-En-Woëvre', 'country' => 'France'));
        User::insert(array('email' => 'dinhbaduy@gmail.com', 'first_name' => 'Duy', 'password' => Hash::make('Admin57100'), 'role_id' => 0, 'address' => '18 rue Général Mangin', 'city' => 'Thionville', 'country' => 'France'));
        User::insert(array('email' => 'bioartemislesite@gmail.com', 'first_name' => 'Fabienne', 'password' => Hash::make('PainBio2015'), 'role_id' => 1, 'address' => '4 La Grande Rue', 'city' => 'Rouvres-En-Woëvre', 'country' => 'France'));
        
    }

}
