<?php
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            $permissions = [
               'role-list',
               'role-create',
               'role-edit',
               'role-delete',

               'user-create',
               'user-edit',
               'user-delete',

               'edit-plot',
               'add-plot',
               'delete-plot',

               'edit-car',
               'add-car',
               'delete-car',

               'edit-house',
               'add-house',
               'delete-house',
               'dashboard-details',
               'homepage-post',
               'remove-homepage-post'
               
            ];
          
            foreach ($permissions as $permission) {
                 Permission::create(['name' => $permission]);
            }
        }
    }
