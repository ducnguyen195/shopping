<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
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
        Route::get('/{model_type}/',[CategoryController::class,'category'])->name('admin.category');
        Route::get('/{model_type}/addForm',[CategoryController::class,'addCategoryForm'])->name('admin.add_category');
        Route::post('/{model_type}/store',[CategoryController::class,'store'])->name('admin.store_category');
        Route::get('/{model_type}/edit/{id}',[CategoryController::class,'editForm'])->name('admin.edit_category');
        Route::post('/{model_type}/update/{id}',[CategoryController::class,'update'])->name('admin.update_category');
        Route::get('/{model_type}/destroy/{id}',[CategoryController::class,'destroy'])->name('admin.destroy_category');
    });

    // Route Post
    Route::group(['prefix' => 'post'],function (){
        Route::get('/',[PostController::class,'index'])->name('admin.post');
        Route::get('/add',[PostController::class,'add'])->name('admin.add_post');
        Route::post('/store',[PostController::class,'store'])->name('admin.store_post');
        Route::get('/edit/{id}',[PostController::class,'edit'])->name('admin.edit_post');
        Route::post('/update/{id}',[PostController::class,'update'])->name('admin.update_post');
        Route::get('/destroy/{id}',[PostController::class,'destroy'])->name('admin.destroy_post');
    });
});


