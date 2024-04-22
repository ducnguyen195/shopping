<?php

use App\Http\Controllers\Web\ShopFruitController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'shop-fruit'],function (){
    Route::get('/',[ShopFruitController::class,'index'])->name('shop.index');
    Route::get('/account/',[ShopFruitController::class,'account'])->name('shop.account');
});
