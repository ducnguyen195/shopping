<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::namespace('admin')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('admin.index');
   Route::get('/login',[LoginController::class,'loginForm'])->name('admin.login.form');
   Route::post('/login',[LoginController::class,'login'])->name('admin.login');

  Route::get('/register',[RegisterController::class,'registerForm'])->name('admin.register.form');
  Route::post('/register',[RegisterController::class,'register'])->name('admin.register');

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

    //Route Image
    Route::group(['prefix' => 'image'],function (){
        Route::get('{type}/',[ImageController::class,'index'])->name('admin.image');
        Route::get('{type}/add',[ImageController::class,'add'])->name('admin.add_image');
        Route::post('{type}/store',[ImageController::class,'store'])->name('admin.store_image');
        Route::get('{type}/edit/{id}',[ImageController::class,'edit'])->name('admin.edit_image');
        Route::post('{type}/update/{id}',[ImageController::class,'update'])->name('admin.update_image');
        Route::get('/destroy/{id}',[ImageController::class,'destroy'])->name('admin.destroy_image');

    });

    //Route Shop
    Route::group(['prefix' => 'shop'],function (){
        Route::get('/',[ShopController::class,'index'])->name('admin.shop');
        Route::get('/add',[ShopController::class,'add'])->name('admin.add_shop');
        Route::post('/store',[ShopController::class,'store'])->name('admin.store_shop');
        Route::get('/edit/{id}',[ShopController::class,'edit'])->name('admin.edit_shop');
        Route::post('/update/{id}',[ShopController::class,'update'])->name('admin.update_shop');
        Route::get('/destroy/{id}',[ShopController::class,'destroy'])->name('admin.destroy_shop');
    });

    //Route Product
    Route::group(['prefix' => 'product'],function () {
        Route::get('/',[ProductController::class,'index'])->name('admin.product');
        Route::get('/add',[ProductController::class,'add'])->name('admin.add_product');
        Route::post('/store',[ProductController::class,'store'])->name('admin.store_product');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('admin.edit_product');
        Route::post('/update/{id}',[ProductController::class,'update'])->name('admin.update_product');
        Route::get('/destroy/{id}',[ProductController::class,'destroy'])->name('admin.destroy_product');
    });

    // Router User
    Route::group(['prefix' => 'users'],function (){
        Route::get('/',[UserController::class,'index'])->name('admin.user');
    });
    //Route Oder
    Route::group(['prefix'=> 'order'],function () {
       Route::get('/',[OrderController::class,'index'])->name('admin.order');
       Route::get('/add',[OrderController::class,'add'])->name('admin.add_order');
       Route::post('/store',[OrderController::class,'store'])->name('admin.store_order');
       Route::get('/edit/{id}',[OrderController::class,'edit'])->name('admin.edit_order');
       Route::post('/update/{id}',[OrderController::class,'update'])->name('admin.update_order');
       Route::get('/destroy/{id}',[OrderController::class,'destroy'])->name('admin.destroy_order');
    });

});
