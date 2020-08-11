<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AnnonceursImport;
use App\Exports\AnnonceursExport;
use App\Annonceur;
use DB;

class AnnonceurController extends Controller
{
     public function fileImportExport()
    {
       return view('fileImportExportAnnonceur');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
      $this->validate($request, [
            'file' => 'required|mimes:csv,txt'
        ]);

  
	    DB::beginTransaction();
    try {
        
        $data = Excel::toArray(new AnnonceursImport, $request->file('file'));
        foreach($data as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(
         'code_annonceur'  => $row['concat'],
         'abreviation'   => $row['abreviation'],
        );
       }
      }

      DB::table('annonceurs')->delete();

      if(!empty($insert_data))
      {
       DB::table('annonceurs')->insert($insert_data);


       DB::table('annonceurs')->whereNotIn('code_annonceur', function($q){
       $q->select('code_annonceur')->from('annonces')->distinct();
        })->delete();



      }
       $success = true;
      } catch (\Exception $e) {
        $success = false;
        DB::rollBack();
    }
    
    if ($success) {
    
    return back()->withSuccess( 'l\'operation a réussi' );
  }else return back()->withwarning('fichier incorrect');
}

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new AnnonceursExport, 'Annonceurs-collection.xlsx');
    }   
}
