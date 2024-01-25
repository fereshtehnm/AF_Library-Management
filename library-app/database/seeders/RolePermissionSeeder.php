<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        //        $staff_role= Permission::create([
        //            'name' => 'create books',
        //            'name' => 'edit books',
        //            'name' => 'delete books',
        //        ]);
        //        $user_role= Permission::create([
        //            'name' => 'reserve books',
        //            'name' => 'due books',
        //        ]);
        //        $admin_role= Permission::create([
        //            'name' => 'create staff',
        //            'name' => 'edit staff',
        //            'name' => 'delete staff',
        //            'name' => 'create user',
        //            'name' => 'edit user',
        //            'name' => 'delete user',
        //        ]);
        //
        //
        //        // create roles and assign created permissions
        //
        //
        //        // this can be done as separate statements
        //
        //
        //        $staff_role->assignRole('staff');
        //        $user_role->assignRole('user');
        //        $admin_role->assignRole('admin');
        // create permissions
                app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
                Permission::create([
                    'name' => 'create book',
                    'guard_name' => 'staff', // Set the guard name here
                ]);
                
                Permission::create([
                    'name' => 'edit book',
                    'guard_name' => 'staff', // Set the guard name here
                ]);
            
                Permission::create([
                    'name' => 'delete book',
                    'guard_name' => 'staff', // Set the guard name here
                ]);
        
        
                Permission::create([
                    'name' => 'create staff',
                    'guard_name' => 'admin', // Set the guard name here
                ]);
                
                Permission::create([
                    'name' => 'edit staff',
                    'guard_name' => 'admin', // Set the guard name here
                ]);
                
                Permission::create([
                    'name' => 'delete staff',
                    'guard_name' => 'admin', // Set the guard name here
                ]);
        
        
                Permission::create(['name' => 'reserve book']);
        
                Permission::create(['name' => 'due book']);
        
        
        
        
                // create roles and assign created permissions
        
        
                // this can be done as separate statements
        
                $role_admin = Role::create([
                    'name' => 'admin',
                    'guard_name' => 'admin', // Set the guard name here
                ]);
                $role_admin->givePermissionTo('create staff');
        
                $role_admin->givePermissionTo('edit staff');
        
                $role_admin->givePermissionTo('delete staff');

                $role_staff = Role::create([
                    'name' => 'staff',
                    'guard_name' => 'staff', // Set the guard name here
                ]);

                $role_staff->givePermissionTo('create book');
        
                $role_staff->givePermissionTo('edit book');
        
                $role_staff->givePermissionTo('delete book');
        
    
        
        
                $role = Role::create(['name' => 'user']);
        
                $role->givePermissionTo( 'reserve book');
        
                $role->givePermissionTo('due book');
        
            
    }
}
