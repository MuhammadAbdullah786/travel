<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('roles')->truncate();

        // generate 3 users admin/agent/subscriber
        DB::table('roles')->insert([
        	[
        		'id' => null,
                'name' => "administrator",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
            	'id' => null,
                'name' => "agent",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
            	'id' => null,
                'name' => "subscriber",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
