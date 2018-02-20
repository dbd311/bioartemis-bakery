<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriesTableSeeder
 *
 * @author duy
 */
use Illuminate\Database\Seeder;
use App\Concepts\Category;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->truncate();
        
        Category::insert(array('category_name' => 'Pains bio aux graines'));
        Category::insert(array('category_name' => 'Pains bio aux épices'));
        Category::insert(array('category_name' => 'Pains bio aux fruits (sur blé complet)'));
        Category::insert(array('category_name' => 'Pains natures pur céréale (une seule céréale)'));
        Category::insert(array('category_name' => 'Multicéréales'));
        Category::insert(array('category_name' => 'Pains noirs'));
        Category::insert(array('category_name' => 'Pains sucrés'));
        Category::insert(array('category_name' => 'Pains de fête'));
        Category::insert(array('category_name' => 'Pains de saison'));
        Category::insert(array('category_name' => 'Pains sans gluten'));
        Category::insert(array('category_name' => 'Gâteaux végans '));
        
        Category::insert(array('category_name' => 'Tous les pains bio'));
    }

}
