<?php

namespace App\Imports;

use App\Annonceur;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class AnnonceursImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Annonceur([
            'concat'  =>$row['concat'],
            'abreviation'     =>$row['abreviation'],
            //
        ]);
    }
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


