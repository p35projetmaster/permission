<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Admin;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('admins')
        ->join('users', 'admins.id_users', '=', 'users.id')
        ->select(
            'admins.id_users',
            'admins.id',
            'admins.name',
            'admins.prenom',
            'users.email'
        )
        ->simplePaginate(4);
        
        return view('users.admin_list',compact('data',$data));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin= Admin::find($id);
        $user= User::find($admin->id_users);
        $role=$user->getRoleNames();
        $permissions = Permission::all();

        return view('users.Show', compact('user','admin','role','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$admin = Admin::find($id);
        return view('users.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
       'nom' => [ 'string', 'max:255'],
       'prenom' => ['string', 'max:255'],
       'email' => ['string', 'email', 'max:255'],
       
       'password' => [ 'string', 'min:8'],
        ]);
       
        $admin = Admin::find($id);
        if (isset($request->nom))
        $admin->name =  $request->get('nom');
        if (isset($request->prenom))
        $admin->prenom = $request->get('prenom');
        $admin->save();
        $users =User::find($admin->id_users);
        if (isset($request->email))
        $users->email = $request->get('email');
        if (isset($request->password))
        $users->password = $request->get('password');
        $users->save();
        $roles=$users->getRoleNames();
        $role = Role::findByName($roles[0]); 
        $role->permissions()->detach();
        
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
          $permission=Permission::findByName('supression_placard');
          $role->givePermissionTo($permission);
        }
        if($request->admin) 
        {
            $permission=Permission::findByName('Role');
            $role->givePermissionTo($permission);
        }
         $users->assignRole($role);


         $data = DB::table('admins')
        ->join('users', 'admins.id_users', '=', 'users.id')
        ->select(
            'admins.id_users',
            'admins.id',
            'admins.name',
            'admins.prenom',
            'users.email'
        )
        ->simplePaginate(4);
        
        return view('users.admin_list',compact('data',$data))-> with('success', 'Admin bien modifier!');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $admin= Admin::find($id);
        $user= User::find($admin['id_users']);
        $roles=$user->getRoleNames();
        $role = Role::findByName($roles[0]);
        $admin->delete();
        $user->delete();
        $role->delete();

        return redirect('/adminslist')->with('success', 'Contact deleted!');
    }
}
