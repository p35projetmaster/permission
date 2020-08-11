<?php

namespace App\Imports;

use App\Annonce;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnnoncesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
        return new Annonce([
            'num_baosem'         =>$row['num_baosem'],
            'date_parution_reel' =>$row['date'],
            'code_annonceur'     =>$row['code_annonceur'],
            'code_langue'        =>$row['code_langue'],
            'code_rubrique'        =>$row['code_rubrique'],
            'code_nature'        =>$row['code_nature'],
            'id_version'         =>$row['id_version'],
            'ref_montage'        =>$row['ref_montage'],
            'num_insertion'      =>$row['num_insertion'],
            'titre'              =>$row['titre'],
            'texte'              =>$row['texte'],
            'surface_reel_bloc'       =>$row['surface_reel_bloc'],
            
        ]);
    }
        /*
    * @author Mohsin Khan
    * Skip top heading Data  
    */
    public function headingRow(): int
    {
        return 1;
    }
 
    /* @author Mohsin Khan
    ** validating each row
    */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
    }
 
    /**
     * @param \Throwable $e
     */
    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
        \Log::error($e->getMessage());
         return back();
    }
}
