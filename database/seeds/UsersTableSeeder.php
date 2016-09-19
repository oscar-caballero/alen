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
            'name' => 'user'.str_random(3),
            'last_name' => 'apellido'.str_random(3),
            'user_name' => 'user'.str_random(4),
            'email' => str_random(5).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
