<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
     
     public function home(){
     	
        return view('admin.dashboard');
    }
    public function importer_annonce(){
        return view('admin.importe_annonce');
    }
    public function importer_annonceur(){
        return view('admin.importe_annonceur');
    }

     public function archive(){
        return view('admin.archive');
    }

}
