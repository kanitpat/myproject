<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         $this->call(UsersTableSeeder::class);
         $this->call(PumpsTableSeeder::class);
         $this->call(WatersTableSeeder::class);         
         $this->call(StatusesTableSeeder::class);
         $this->call(User_ActivitiesTableSeeder::class);
         $this->call(Process_StatusesTableSeeder::class);

    }
}
