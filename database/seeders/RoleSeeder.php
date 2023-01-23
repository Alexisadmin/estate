<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        
        
        $role = Role::Create(['name' => 'Admin']);
                  
    $permissions = Permission::pluck('id','id')->all();       
    $role->syncPermissions($permissions);
         
             
    }
}
