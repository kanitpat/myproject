<?php

use Illuminate\Database\Seeder;

class WatersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('waters')->insert([
            ['waterLevel' => 1.9, 
            'date' => '2018-11-05',  
            'time' => '13:08:06'],     
            ['waterLevel' => 1.5, 
            'date' => '2018-11-05',  
            'time' => '14:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
            ['waterLevel' => 1.4, 
            'date' => '2018-11-05',  
            'time' => '15:08:06'],
           
            ]);
    }
}
