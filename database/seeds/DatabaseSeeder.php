<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(DepartmentSeeder::class);
        // $this->call(PositionSeeder::class);
        // $this->call(AdminUserSeeder::class);
        // $this->call(CaseUserSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(PermissionSeeder::class);
        // $this->call(UserPermissionSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(ReportedCaseSeeder::class);
        // $this->call(CaseHolderSeeder::class);
    }
}
