<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name'=>'Importation']);
    	Permission::create(['name'=>'Archive']);
    	Permission::create(['name'=>'supression_placard']);
    	Permission::create(['name'=>'Abonnees']);
    	Permission::create(['name'=>'Demandes']);
    	Permission::create(['name'=>'Annonnces']);
    	Permission::create(['name'=>'Role']);
        
    }
}

