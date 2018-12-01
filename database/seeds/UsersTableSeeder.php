<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'admin@hotmail.com', 
            'password' => bcrypt('admin'),
            'name' => ('admin'),  
            'lastname' => ('JKS'),
            'admin' => '1'],
          
            ['email' => 'jim@hotmail.com', 
            'password' => bcrypt('1234'),
            'name' => ('คณิตพัฒน์'),  
            'lastname' => ('ทรงวัฒนา'),
            'admin' => '0'],
           
            ['email' => 'hot@hotmail.com', 
            'password' => bcrypt('1234'),
            'name' => ('hot'),  
            'lastname' => ('MukMuk'),
            'admin' => '0'],
            ]);
    }
}
