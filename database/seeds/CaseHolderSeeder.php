<?php

use Illuminate\Database\Seeder;
use App\CaseHolder;

class CaseHolderSeeder extends Seeder
{
    public function run()
    {
    	DB::statement("SET FOREIGN_KEY_CHECKS=0");
        CaseHolder::truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1");

        CaseHolder::create([
        	'reported_case_id' => 1,
        	'admin_user_id' => 1,
        	'assigned_by' => 3,
        	'unassigned_by' => NULL,
        ]);

        CaseHolder::create([
        	'reported_case_id' => 1,
        	'admin_user_id' => 3,
        	'assigned_by' => 1,
        	'unassigned_by' => NULL,
        ]);

        CaseHolder::create([
        	'reported_case_id' => 2,
        	'admin_user_id' => 1,
        	'assigned_by' => 3,
        	'unassigned_by' => NULL,
        ]);

        CaseHolder::create([
        	'reported_case_id' => 2,
        	'admin_user_id' => 3,
        	'assigned_by' => 1,
        	'unassigned_by' => NULL,
        ]);
    }
}
