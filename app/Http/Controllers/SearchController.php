<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonceur;
use App\Rubrique;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;




class SearchController extends Controller
{

  public function show() 
    {
  
       $natures= DB::table('natures')
          ->orderBy('libelle_nature', 'ASC')
          ->get();

         $rubriques= DB::table('rubriques')
          ->orderBy('libelle_rubrique', 'ASC')
          ->get();

         $versions= DB::table('versions')
          ->orderBy('nom', 'ASC')
          ->get();
       $annanceur= DB::table('annonceurs')->get();

    return view('admin.annance' , compact('annanceur','natures','rubriques','versions',));



    }

      public function search(Request $request) 
    {


    }


}