<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
         //Permission::create(['name'=>'Role']);
       // Role::create(['name'=>'abonee']);
       //$role=Role::findByName('Admin');
       // $permission=Permission::findByName('Importe');
       // $role->givePermissionTo($permission);
       // auth()->user()->assignRole('Admin');
        //auth()->user()->givePermissionTo('Archive');
         //return auth()->user()->getAllPermissions();

       // $user = User::create(['email' => 'samah@gmail.com', 'password' => bcrypt('password'), 'created_at' => '2019-05-28 04:45:27', 'updated_at' => '2019-05-28 04:45:27' ]);
         //auth()->user()->givePermissionTo(Permission::all());
        //$user->assignRole('abonee');
        //$user = auth()->user();
        //$user->givePermissionTo(Permission::all()); 
       // $permissions = $user->getAllPermissions();

        //dd($permissions);



        return view('home');
    }
}
