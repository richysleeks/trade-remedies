<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{

    public function run()
    {
    	DB::statement("SET FOREIGN_KEY_CHECKS=0");
        Permission::truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1");

        //Administrator Permissions
        Permission::create(['name' => 'browse_administrator', 'guard_name' => 'web', 'display_name' => 'Browse Administrator', 'table_name'=> 'administrator']);
        Permission::create(['name' => 'add_administrator', 'guard_name' => 'web', 'display_name' => 'Add Administrator', 'table_name'=> 'administrator']);
        Permission::create(['name' => 'read_administrator', 'guard_name' => 'web', 'display_name' => 'Read Administrator', 'table_name'=> 'administrator']);
        Permission::create(['name' => 'edit_administrator', 'guard_name' => 'web', 'display_name' => 'Edit Administrator', 'table_name'=> 'administrator']);
        Permission::create(['name' => 'delete_administrator', 'guard_name' => 'web', 'display_name' => 'Delete Administrator', 'table_name'=> 'administrator']);
        Permission::create(['name' => 'activate_deactivate_administrator', 'guard_name' => 'web', 'display_name' => 'Activate/Deactivate Administrator', 'table_name'=> 'administrator']);

        //Administrator Roles Permissions
        Permission::create(['name' => 'browse_administrator_roles', 'guard_name' => 'web', 'display_name' => 'Browse Administrator Roles', 'table_name'=> 'administrator_roles']);
        Permission::create(['name' => 'add_administrator_roles', 'guard_name' => 'web', 'display_name' => 'Add Administrator Roles', 'table_name'=> 'administrator_roles']);
        Permission::create(['name' => 'edit_administrator_roles', 'guard_name' => 'web', 'display_name' => 'Edit Administrator Roles', 'table_name'=> 'administrator_roles']);
        Permission::create(['name' => 'delete_administrator_roles', 'guard_name' => 'web', 'display_name' => 'Delete Administrator Roles', 'table_name'=> 'administrator_roles']);

    }
}
