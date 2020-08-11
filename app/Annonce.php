<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    
         protected $fillable = [
         'num_baosem'         ,
            'date_parution_reel' ,
            'code_annonceur'     ,
            'code_langue '       ,
            'code_rubrique'     ,
            'code_nature'       ,
            'id_version'         ,
            'ref_montage'        ,
            'num_insertion'     ,
            'titre'              ,
            'texte'              ,
            'surface_reel_bloc',
            'encours',
    ];
}
