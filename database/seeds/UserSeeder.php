<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Reinn Macario',
            'email'=> 'reinnmacario@gmail.com',
            'password' => bcrypt('123456'),
            'status' => 1,
        ]);
    }
}
