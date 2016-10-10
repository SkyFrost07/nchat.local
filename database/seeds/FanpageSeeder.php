<?php

use Illuminate\Database\Seeder;

class FanpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<7; $i++){
            \Rikkei\Chat\Models\Fanpage::create(['name' => 'Fanpage '.$i]);
        }
    }
}
