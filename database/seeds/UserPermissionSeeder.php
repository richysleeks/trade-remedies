<?php

use Illuminate\Database\Seeder;
use App\Permission;

class UserPermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::all();

        foreach($permissions as $permission){
            $query = 'INSERT INTO `role_has_permissions` (`role_id`, `permission_id`) VALUES
                    (1, '.$permission->id.')';
                    
            DB::insert($query);
        }
    }
}
