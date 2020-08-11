<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;
use App\Admin;
use DB;

class RoleController extends Controller
{
    public function show()
    {
        //Permission::create(['name'=>'Importation']);
    	//Permission::create(['name'=>'Archive']);
    	//Permission::create(['name'=>'supression placard']);
    	//Permission::create(['name'=>'Abonnées']);
    	//Permission::create(['name'=>'Demandes']);
    	//Permission::create(['name'=>'Annonnces']);
    	//Permission::create(['name'=>'Role']);
       return view('users.add_admine');
    }
    public function create(Request $request)
    {
      $this->validate($request, [
       'name' => ['required', 'string', 'max:255'],
       'prenom' => ['required', 'string', 'max:255'],
       
       'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
       
       'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
     try {
       $role=Role::create(['name'=>$request->role]);
} catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
       if($request->webmaster) 
       	$role->givePermissionTo(Permission::all()); 
       else {
       	if($request->Importation) 
       	{
       		$permission=Permission::findByName('Importation');
       		$role->givePermissionTo($permission);
        }
        if($request->Annonnces) 
       	{
       		$permission=Permission::findByName('Annonnces');
       		$role->givePermissionTo($permission);
        }
        if($request->Archive) 
       	{
       		$permission=Permission::findByName('Archive');
       		$role->givePermissionTo($permission);
        }
        if($request->Demandes) 
       	{
       		$permission=Permission::findByName('Demandes');
       		$role->givePermissionTo($permission);
        }
        if($request->Abonnees) 
       	{
       		$permission=Permission::findByName('Abonnees');
       		$role->givePermissionTo($permission);
        }
        if($request->supression_placard) 
        {
          $permission=Permission::findByName('supression placard');
          $role->givePermissionTo($permission);
        }
        if($request->admin) 
       	{
       		$permission=Permission::findByName('Role');
       		$role->givePermissionTo($permission);
        }
       }
       DB::beginTransaction();

try {
     $user = User::create(['email' => $request->email, 'password' => bcrypt($request->password)]);
      
     DB::table('admins')->insert(
     array(
            'name'     =>   $request->name, 
            'prenom'   =>   $request->prenom,
            'id_users' =>   $user->id
     )
      );
       $user->assignRole($role);

       DB::commit();
    // all good
        return back()->with('success', 'Admin bien enregistre!');
} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
     return back()->withError($e->getMessage())->withInput();
}
        
    }

  
   
}
