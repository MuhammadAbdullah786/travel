<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users admin/agent/subscriber
        DB::table('users')->insert([
            [
            	'id' => null,
                'name' => "Admin1",
                'role_id' => "1",
                'is_active' => "1",
                'email' => "admin1@gmail.com",
                'password' => bcrypt('123456'),
                'remember_token' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
            	'id' => null,
                'name' => "Agent1",
                'role_id' => "2",
                'is_active' => "1",
                'email' => "agent1@gmail.com",
                'password' => bcrypt('123456'),
                'remember_token' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
            	'id' => null,
                'name' => "User1",
                'email' => "user1@gmail.com",
                'role_id' => "3",
                'is_active' => "1",
                'password' => bcrypt('123456'),
                'remember_token' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
