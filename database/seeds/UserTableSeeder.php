<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert(
        [	
        	[	
        		'name' => 'alal',
        		'email' => 'alal@mail.com',
        		'password' => '11111111'
                	],
            [	
        		'name' => 'dafa',
        		'email' => 'dafa@mail.com',
        		'password' => '11111111'
                	],
            [	
        		'name' => 'hisyam',
        		'email' => 'hisyam@mail.com',
        		'password' => '11111111'
                	],
                		]
    );
    }
}
