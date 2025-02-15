<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UnitiesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('layouts.dashboard');
})->name('dashboard');


// Route de categories

Route::get('/createCategory', [CategoriesController::class, 'create'])->name('create-category');

Route::post('/newCategory', [CategoriesController::class, 'store'])->name('new-category');

Route::get('/listCategory', [CategoriesController::class, 'index'])->name('list-category');

Route::get('/editCategory/{id}', [CategoriesController::class, 'edit'])->name('edit-category');

Route::put('/updateCategory/{category}', [CategoriesController::class, 'update'])->name('update-category');

Route::get('/deleteCategory/{id}', [CategoriesController::class, 'destroy'])->name('delete-category');


// Route d'unites


Route::get('/createUnity', [UnitiesController::class, 'create'])->name('create-unity');

Route::post('/newUnity', [UnitiesController::class, 'store'])->name('new-unity');

Route::get('/listUnity', [UnitiesController::class, 'index'])->name('list-unity');

Route::get('/editUnity/{id}', [UnitiesController::class, 'edit'])->name('edit-unity');

Route::put('/updateUnity/{unity}', [UnitiesController::class, 'update'])->name('update-unity');

Route::get('/deleteUnity/{id}', [UnitiesController::class, 'destroy'])->name('delete-unity');



// Route de produits


Route::get('/createProduct', [ProductsController::class, 'create'])->name('create-product');

Route::post('/newProduct', [ProductsController::class, 'store'])->name('new-product');

Route::get('/listProduct', [ProductsController::class, 'index'])->name('list-product');

Route::get('/editProduct/{id}', [ProductsController::class, 'edit'])->name('edit-product');

Route::put('/updateProduct/{product}', [ProductsController::class, 'update'])->name('update-product');

Route::get('/deleteProduct/{id}', [ProductsController::class, 'destroy'])->name('delete-product');

// pour optimiser le fichier de route, taper la commande
// php artisan optimize:clear