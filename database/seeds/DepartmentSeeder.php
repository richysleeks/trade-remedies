<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
    	// DB::statement("SET FOREIGN_KEY_CHECKS=0");
        // Department::truncate();
        // DB::statement("SET FOREIGN_KEY_CHECKS=1");
        DB::statement("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE");

        Department::create(['name' => 'Research and Documentation']);
        Department::create(['name' => 'Administration']);
        Department::create(['name' => 'Conflict Resolution']);
        Department::create(['name' => 'Economy Development']);
    }
}
