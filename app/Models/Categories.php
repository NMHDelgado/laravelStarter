<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    /**
     * Importation de la librairie pour la generation et la facilitaiton des tests
     */
    use HasFactory;

    // Declaration des attributs du models (une facon de voir cela)
    protected $fillable =[
        'name',
        'description'
    ];

    // Mappage|etablissament de la relation entre les produits et la categorie
    public function product(){
        return $this->hasMany(Products::class);
    }
}
