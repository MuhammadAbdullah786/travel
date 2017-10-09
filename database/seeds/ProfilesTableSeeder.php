<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('profiles')->truncate();

        // generate 3 users admin/agent/subscriber
        DB::table('profiles')->insert([
            [
            	'id' => null,
                'user_id' => 1,
                'photo' => "default_profile.jpg",
                'address' => "Banglore, India",
                'location' => "Banglore",
                'contact_no' => 9999999999,
                'sex' => 'Male',
                'bio' => '"Lorem ipsum dolor sit amet, consectetaur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                 pariatur. Excepteur sint occaecat cupidatat non proident, 
                 sunt in culpa qui officia deserunt mollit anim id est laborum."',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
            	'id' => null,
                'user_id' => 2,
                'photo' => "default_profile.jpg",
                'address' => "Banglore, India",
                'location' => "Banglore",
                'contact_no' => 9999999999,
                'sex' => 'Male',
                'bio' => '"Lorem ipsum dolor sit amet, consectetaur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                 pariatur. Excepteur sint occaecat cupidatat non proident, 
                 sunt in culpa qui officia deserunt mollit anim id est laborum."',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
            	'id' => null,
                'user_id' => 3,
                'photo' => "default_profile.jpg",
                'address' => "Banglore, Karnatka, India",
                'location' => "Banglore",
                'contact_no' => 9999999999,
                'sex' => 'Male',
                'bio' => '"Lorem ipsum dolor sit amet, consectetaur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                 pariatur. Excepteur sint occaecat cupidatat non proident, 
                 sunt in culpa qui officia deserunt mollit anim id est laborum."',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
