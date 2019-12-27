<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
    	// DB::statement("SET FOREIGN_KEY_CHECKS=0");
        AdminUser::truncate();
      //   DB::statement("SET FOREIGN_KEY_CHECKS=1");

        AdminUser::create([
        	'department' => 1,
        	'position' => 2,
        	'created_by' => NULL,
        	'employee_id' => 'EMP000001',
        	'sex' => 'Male',
        	'address' => 'Kaduna - Nigeria',
        	'phone' => '+234 7061 151 982']
        );

        AdminUser::create([
        	'department' => 2,
        	'position' => 2,
        	'created_by' => NULL,
        	'employee_id' => 'EMP000002',
        	'sex' => 'Female',
        	'address' => 'Abuja - Nigeria',
        	'phone' => '+234 7061 252 982']
        );
    }
}
