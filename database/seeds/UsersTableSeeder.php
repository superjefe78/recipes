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
        //
        DB::table('users')->insert([
        [
            'name' => 'superjefe78',
            'email' => 'superjefe78'.'@gmail.com',
            'password' => bcrypt('secret'),
        ]
        ]);        
    }
}
	