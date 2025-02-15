<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'unity_id',
        'quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function unity()
    {
        return $this->belongsTo(Unities::class, 'unity_id');
    }
}
