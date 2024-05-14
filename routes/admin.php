<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'shop-fruit/admin'],function (){
    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/login',[AdminController::class,'login'])->name('admin.login');
    Route::get('/brand',[BrandController::class,'brand'])->name('admin.brand');
});
