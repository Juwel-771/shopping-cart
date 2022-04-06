<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ProductController::class,'home']);

// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/account', function () {
    return view('account');
});

//Route::get('/cart', function () {
//    return view('cart');
//});

Route::resource('/products',ProductController::class);
Route::post('/add-to-cart',[ProductController::class,'addToCart']);
Route::get('/cart',[ProductController::class,'viewCart']);
Route::get('/remove-item/{rowId}',[ProductController::class,'removeItem']);
Route::resource('/users',UserController::class);

Route::get('/add_product',[ProductController::class,'add_products']);
