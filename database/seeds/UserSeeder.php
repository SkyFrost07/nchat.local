<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++) {
            App\User::create(['name' => 'Member '.$i, 'email' => 'member'.$i.'@gmail.com', 'password' => bcrypt('123456')]);
        }
    }
}
