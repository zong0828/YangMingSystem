<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePromissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        // Permission::create(['name' => 'Promission view']);
		// Permission::create(['name' => 'Promission edit']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'student']);
		$role = Role::create(['name' => 'teacher']);
       // $role->givePermissionTo('edit articles');

        $role = Role::create(['name' => 'TA']);
		// $role->givePermissionTo('Promission view');
		
		$role = Role::create(['name' => 'administrator']);
		// $role->givePermissionTo(Permission::all());
   
       // $role->givePermissionTo(['publish articles', 'unpublish articles']);
    }
}
