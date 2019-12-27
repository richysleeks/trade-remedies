<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
		 
    	// DB::statement("SET FOREIGN_KEY_CHECKS=0");
        User::truncate();
      //   DB::statement("SET FOREIGN_KEY_CHECKS=1");

        User::create([
        	'name' => "Richard Odigiri",
        	'email' => "richysleek@gmail.com",
        	'password' => '$2y$10$ycr2xzgSpXg4je9QIQuUluazxQ1ItOfIP6p0rrv.QwRgl4owqH0A2',
        	'typeable_id' => 1,
        	'typeable_type' => "App\\AdminUser"
        ]);

        User::create([
        	'name' => "Richard Odigiri",
        	'email' => "richy@gmail.com",
        	'password' => '$2y$10$mC6.KsnYmkVuNtr6bwIeB.l9TZSbS/u/KrnJl6l/RmjmhRhRqx6x6',
        	'typeable_id' => 1,
        	'typeable_type' => "App\\CaseUser"
        ]);

        User::create([
        	'name' => "Nuhu Ibrahim",
        	'email' => "contactnuhuibrahim@gmail.com",
        	'password' => '$2y$10$mC6.KsnYmkVuNtr6bwIeB.l9TZSbS/u/KrnJl6l/RmjmhRhRqx6x6',
        	'typeable_id' => 2,
        	'typeable_type' => "App\\AdminUser"
        ]);

        User::create([
        	'name' => "Nuhu Ibrahim",
        	'email' => "contactnuhuibrahim@icloud.com",
        	'password' => '$2y$10$mC6.KsnYmkVuNtr6bwIeB.l9TZSbS/u/KrnJl6l/RmjmhRhRqx6x6',
        	'typeable_id' => 2,
        	'typeable_type' => "App\\CaseUser"
        ]);
    }
}
