<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\penjualan;
use App\Http\Controllers\Product;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route home
Route::get('/home',[HomeController::class,'index']);

//route product
route::prefix('product')->group(function (){
    route::get('/category/food-Beverage',[Product::class,'foodBeverage']);
    route::get('/category/beauty-health',[Product::class,'beautyHealth']);
    route::get('/category/Home-Care',[Product::class,'HomeCare']);
    route::get('/category/Baby-kid',[Product::class,'BabyKid']);
});

//route user
route::get('/user/{id}/name/{name}',[User::class,'user']);


//route penjualan
route::get('/penjualan',[penjualan::class,'Penjualan']);
