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
    return view('index');
});

//Route::get('/produits', [ProductController::class,'index']);

//Route::get('/produits/12-iphone-xs/{product}', [ProductController::class,'show']);

//Route::get('/categorie/12-smartphone/{category}', [CategoryController::class, 'show']);

//Route::get('/contact', [ContactController::class,'index']);

Route::get('/produits', function () {

    return view('produits.index');
});
 Route::get ('/produits/12-iphone-xs/{id}', function ($product) {
    $product = Product::find($product);
    return view ('produits.show', [

        'product' => $product
    ]);
 });

 Route::get('/categorie/12-smartphone/{category}', function ($category) {
     $category = Category::find($category);

    return view ('categorie.show');
 });

 Route::get('/contact', function () {

    return view ('contact.index');
 });