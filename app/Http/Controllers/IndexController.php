<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    public function index(){
        return view('site.pages.index');
    }
    public function abonnement(){
        return view('site.pages.abonner');
    }
    public function contact(){
        return view('site.pages.contact');
    }
    public function points_de_ventes(){
		$localisations = DB::table('localisations')->get();
        return view('site.pages.points_de_vente',compact('localisations'));
    }
    
    public function Cahier_de_charge(){
        return view('site.pages.Cahier_de_charge');
    }
      public function tarif(){
        return view('site.pages.tarif');
    }
     

}

