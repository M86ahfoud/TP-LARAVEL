<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category; 

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'prix', 'slug', 'dat_creation', 'coup_de_coeur', 'liste_couleurs',
        'image', 'promotion'
    ];

    

    public function Category() 
    {
        return $this->belongsTo(Category::class);
    }
}
