<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
/*GET:lecture
POST:ajouter
PUT:modification totale    
PATCH:modification partielle
DELETE:Supprimer */

// Route::get("/", [CategorieController::class,"index"])->name("categories.index");
// Route::get("/categories/create", [CategorieController::class,"create"])->name("categories.create");
// Route::post("/categories/store", [CategorieController::class,"store"])->name("categories.store");
// Route::get("/categories/{categorie}/edit", [CategorieController::class,"edit"])->name("categories.edit");
// Route::put("/categories/{categorie}", [CategorieController::class,"update"])->name("categories.update");
// Route::delete("/categories/{categorie}", [CategorieController::class,"destroy"])->name("categories.destroy");
Route::get('/login',[LoginController::class,'show'])->name('login.show');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
Route::resource('categories', App\Http\Controllers\CategorieController::class);
Route::resource('souscategories',App\Http\Controllers\SousCategorieController::class);
Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('articles',App\Http\Controllers\ArticleController::class);
//Route::resource('reglements',App\Http\Controllers\ReglementController::class);
Route::resource('bon_livraisons',App\Http\Controllers\BonLivraisonsController::class);
Route::get('/', function () {
    return view('welcome');
});