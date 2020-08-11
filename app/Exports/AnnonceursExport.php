<?php

namespace App\Exports;

use App\Annonceur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AnnonceursExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Annonceur::all();
    }
     public function headings(): array
    {
        return [
            'concat',
            'abreviation'
        ];
    }
}
