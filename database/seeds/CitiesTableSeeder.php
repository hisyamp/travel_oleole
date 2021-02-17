<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\City::insert(
        [		
        		[
                	'nama' => 'Depok',    	
                ],
        		[
                	'nama' => 'Surabaya',    	
                ],
                [
                	'nama' => 'Sumedang',    	
                ],
                [
                	'nama' => 'Jogja',    	
                ],
                [
                	'nama' => 'Makassar',    	
                ],
                [
                	'nama' => 'Lombok',    	
                ],
                [
                	'nama' => 'Denpasar',    	
                ],
                [
                	'nama' => 'Jakarta',    	
                ],
                [
                	'nama' => 'Malang',    	
                ],
                [
                	'nama' => 'Pekanbaru',    	
                ],
                [
                	'nama' => 'Batam',    	
                ],
                [
                	'nama' => 'Bandung',    	
                ],
                [
                	'nama' => 'Pacitan',    	
                ],
                [
                	'nama' => 'Solo',    	
                ]]
    );
    }
}
