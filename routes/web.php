<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
     
    return view('index', [
        "produits" => Product::inRandomOrder()->limit(3)->get(),
        "FavriProduit" => Product::where('coup_de_coeur', 1)->inRandomOrder()->first(),
        "parabol" => Product::latest()->limit(4)->get(),
    ]);
});

Route::get('/produits', [ProductController::class,'index']);

Route::get('/produits/{product}-iphone-xs/', [ProductController::class,'show']);

Route::get('/categorie/{category}-smartphone/', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class,'index']);


 