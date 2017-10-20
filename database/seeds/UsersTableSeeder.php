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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	[
        		'name' => "John Doe",
        		'email' => 'john@test.com',
        		'password' => bcrypt('secret')


        	],
        	[
        		'name' => "Jane Doe",
        		'email' => 'Jane@test.com',
        		'password' => bcrypt('secret')


        	],
        	[
        		'name' => "Sue Doe",
        		'email' => 'sue@test.com',
        		'password' => bcrypt('secret')


        	],
    	]);
    }
}
