<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unities extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description'
    ];

    public function product(){
        return $this->hasMany(Products::class);
    }
}
