<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;


class Utilisateur extends Authenticatable 
// implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    protected $fillable=[
        'name',
        'email',
        'password',
        'sexe',
        'status',
        'profile',
        'token'
    ];

    public function product(){
        return $this->hasMany(Products::class);
    }
}
