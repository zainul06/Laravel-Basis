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
            'name' => 'zainul',
            'email' => 'zainull886@gmail.com',
            'password' => bcrypt('abcdefgh'),
        ]);
    }
}