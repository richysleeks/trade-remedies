<?php

use Illuminate\Database\Seeder;
use App\CaseUser;

class CaseUserSeeder extends Seeder
{
    public function run()
    {
    	// DB::statement("SET FOREIGN_KEY_CHECKS=0");
        CaseUser::truncate();
        // DB::statement("SET FOREIGN_KEY_CHECKS=1");

        CaseUser::create([
        	'company_name' => "Kaduna Markets Development & Management Company",
        	'RC_number' => "RC120002",
        	'address' => "Kaduna - NIgeria",
        	'phone' => '+234 7010 000 184'
        ]);

        CaseUser::create([
        	'company_name' => "Lexington Hub",
        	'RC_number' => "RC123432",
        	'address' => "United States",
        	'phone' => '+234 7011 000 432'
        ]);
    }
}
