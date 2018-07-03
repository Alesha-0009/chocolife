<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
        {
            DB::table('users')->insert([
                'name' => str_random(10),
                'surname' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'phone' => rand(1,11),
                'status' => rand(1,2),
            ]);
        }
    }
}