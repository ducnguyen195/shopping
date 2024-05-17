<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
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
    //Web
Route::group(['prefix'=>'shop-fruit'],function (){
    Route::get('/',[ShopFruitController::class,'index'])->name('shop.index');
    Route::get('/account/',[ShopFruitController::class,'account'])->name('shop.account');
});

Route::group(['prefix'=>'shop-fruit/admin'],function (){
    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/login',[AdminController::class,'login'])->name('admin.login');

        //    Route Brand
    Route::group(['prefix'=>'brands'],function (){
        Route::get('/',[BrandController::class,'brand'])->name('admin.brand');
        Route::get('/addForm',[BrandController::class,'addBrandForm'])->name('admin.add_brand');
        Route::post('/store',[BrandController::class,'store'])->name('admin.store_brand');
        Route::get('/edit/{id}',[BrandController::class,'editForm'])->name('admin.edit_brand');
        Route::post('/update/{id}',[BrandController::class,'update'])->name('admin.update_brand');
        Route::get('/destroy/{id}',[BrandController::class,'destroy'])->name('admin.destroy_brand');
    });

    // Route Category
    Route::group(['prefix' => 'category'],function (){
        Route::get('/',[CategoryController::class,'category'])->name('admin.category');
        Route::get('/addForm',[CategoryController::class,'addCategoryForm'])->name('admin.add_category');
        Route::post('/store',[CategoryController::class,'store'])->name('admin.store_category');
        Route::get('/edit/{id}',[CategoryController::class,'editForm'])->name('admin.edit_category');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('admin.update_category');
        Route::get('/destroy/{id}',[CategoryController::class,'destroy'])->name('admin.destroy_category');
    });
});


