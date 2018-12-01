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
            'is_admin' => 'Yes'],
          
            ['email' => 'jim@hotmail.com', 
            'password' => bcrypt('1234'),
            'name' => ('คณิตพัฒน์'),  
            'lastname' => ('ทรงวัฒนา'),
            'is_admin' => 'No'],
           
            ['email' => 'hot@hotmail.com', 
            'password' => bcrypt('1234'),
            'name' => ('hot'),  
            'lastname' => ('MukMuk'),
            'is_admin' => 'No'],
            ]);
    }
}
