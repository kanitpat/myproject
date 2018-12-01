<?php

use Illuminate\Database\Seeder;

class User_ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_activities')->insert([
            ['value' => 20, 
            'date' => '2018-11-05',
            'time' => '13:08:06',  
            'idUsers' => 1,],

            ['value' => 15, 
            'date' => '2018-11-15',
            'time' => '13:08:06',  
            'idUsers' => 1,],
      
            ['value' => 20, 
            'date' => '2018-12-12',
            'time' => '13:08:06',  
            'idUsers' => 1,],
                ]);
        }
}
