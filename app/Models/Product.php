<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'prix', 'slug', 'dat_creation', 'coup_de_coeur', 'liste_couleurs',
        'image', 'promotion'
    ];

    /**protected $casts =  [

        'liste_couleurs' => [

            '1' => 'yellow',
            '2' => 'red',
            '3' =>  'brown',
            '4' =>  'green',
            '5' =>  'orange'
        ],
    ];*/
}
