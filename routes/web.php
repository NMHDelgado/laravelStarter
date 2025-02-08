<?php

use App\Http\Controllers\UnitedController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashbord', function(){
    return view('layouts.dashboard');
})->name('dashboard');

Route::get('/united', [UnitedController::class, 'index'])->name('united');


// pour optimiser le fichier de route, taper la commande
// php artisan optimize:clear