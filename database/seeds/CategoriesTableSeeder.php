<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::insert(
        [[
                	'nama' => 'Gunung',    	
                ],
                [
                	'nama' => 'Pantai',    	
                ],
                [
                	'nama' => 'Danau',    	
                ],
                [
                	'nama' => 'Hutan',    	
                ],
                [
                	'nama' => 'Taman',    	
                ],
                [
                	'nama' => 'Sungai',    	
                ],
                [
                	'nama' => 'Candi',    	
                ],
                [
                	'nama' => 'Taman Bermain',    	
                ],
                [
                	'nama' => 'Air Terjun',    	
                ],
                [
                	'nama' => 'Pasar',    	
                ],
                [
                	'nama' => 'Mall',    	
                ],
                [
                	'nama' => 'Museum',    	
                ],
                [
                	'nama' => 'Kolam Renang',    	
                ],[
                	'nama' => 'Alun-Alun',    	
                ]]
    );
    }
}
