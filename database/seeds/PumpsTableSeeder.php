<?php

use Illuminate\Database\Seeder;

class PumpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pumps')->insert([
            ['address' => 'สวนมะนาว']
            ]);
    }
}
