<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitiesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UtilisateurController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'loginPage'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login.utilisateurs');
Route::get('/register', [HomeController::class, 'registerPage'])->name('register');
Route::post('/register', [UtilisateurController::class, 'register'])->name('register.utilisateurs');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/verifyMail', function(){
    return view('Mail.verifyMail');
})->name('verifyMail');
Route::get('/activated/{token}', [UtilisateurController::class, 'activate'])->name('activate');

// Route::get('/email/verify', function () {
//     return view('auth.verify');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
//     $user = \App\Models\User::findOrFail($id);

//     if (! hash_equals($hash, sha1($user->getEmailForVerification()))) {
//         throw new \Illuminate\Validation\ValidationException('This email verification link has expired or is invalid');
//     }

//     $user->markEmailAsVerified();
//     $user->update(['status' => 'Enable']);

//     return redirect('/home')->with('verified', true);
// })->middleware(['auth', 'signed'])->name('verification.verify');

Route::middleware(['auth:utilisateur'])->group(function (){

    Route::get('profile/{filename}', function ($filename) {
        $path = storage_path('app/public/profiles/' . $filename);
    
        if (file_exists($path)) {
            return response()->file($path);
        }
    
        abort(404);
    });

    Route::get('/dashboard', function(){ return view('layouts.dashboard'); })->name('dashboard');


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

});
// ->middleware('verified');