<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            ['numstatus' => 0, ],
            ['numstatus' => 1, ],
            ['numstatus' => 0, ],
            ['numstatus' => 0, ],
            ['numstatus' => 0, ],
            ['numstatus' => 0, ],
            ['numstatus' => 0, ],
            ['numstatus' => 0, ],
            ['numstatus' => 1, ],
          

            ]);
    }
}