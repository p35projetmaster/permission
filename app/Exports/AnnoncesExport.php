<?php

namespace App\Exports;

use App\Annonce;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AnnoncesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Annonce::all();
    }
    public function headings(): array
    {
        return [
            'num_baosem' ,       
            'date_parution_reel' ,
            'code_annonceur',     
            'code_langue ' ,     
            'code_nature' ,       
            'id_version'  ,      
            'ref_montage' ,       
            'num_insertion' ,     
            'titre',  
            'texte',     
            'surface_reel'       
        ];
    }
}
