<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Web\AccountController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\PaymentController;
use App\Http\Controllers\Web\ShopFruitController;
use App\Http\Controllers\Web\ShopProductController;
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

    Route::get('/login',[LoginController::class,'loginForm'])->name('shop.login_form');
    Route::post('/login',[LoginController::class,'login'])->name('shop.login');
    Route::get('/register',[RegisterController::class,'registerForm'])->name('shop.register_form');
    Route::post('/register',[RegisterController::class,'create'])->name('shop.register');

    //Cart
    Route::get('/getCart',[CartController::class,'getCart'])->name('shop.cart_product');
    Route::group(['prefix' => 'cart','middleware' => 'web'],function (){
        Route::get('/',[CartController::class,'index'])->name('shop.cart_index');
        Route::post('add',[CartController::class,'add'])->name('shop.add_product');
        Route::post('destroy',[CartController::class,'destroy'])->name('shop.destroy_product');
        Route::post('store',[CartController::class,'store'])->name('shop.store_product');
        Route::post('update',[CartController::class,'update'])->name('shop.update_product');
        Route::get('quantity',[CartController::class,'quantityCart'])->name('shop.quantity_real');
    });

    Route::group(['prefix'=>'payment', 'middleware'=> 'web'],function (){
        Route::get('/',[PaymentController::class,'index'])->name('shop.payment');
        Route::get('/result',[PaymentController::class,'result'])->name('shop.payment_result');
        Route::post('action_payment',[PaymentController::class,'createOrder'])->name('shop.is_payment');
        Route::get('/vnpay_check',[PaymentController::class,'checkPayment'])->name('shop.vnpay-check');
        Route::get('/momo_payment',[PaymentController::class,'momo_payment'])->name('shop.payment_momo');

    });

   Route::group(['prefix'=> 'account'] , function (){
       Route::get('/',[AccountController::class,'account'])->name('shop.account');
       Route::get('/orders',[AccountController::class,'orders'])->name('shop.order');
   });

    Route::get('/blog',[ShopFruitController::class,'blog'])->name('shop.blog');
    Route::get('/introduce',[ShopFruitController::class,'introduce'])->name('shop.introduce');
    Route::get('/contact',[ShopFruitController::class,'contact'])->name('shop.contact');
    Route::get('/favourite',[ShopFruitController::class,'favourite'])->name('shop.favourite');

    //Web
    Route::get('/',[ShopFruitController::class,'index'])->name('shop.index');
    Route::get('/list_product',[ShopProductController::class,'listProduct'])->name('shop.list_product');
    Route::get('/{slug}',[ShopProductController::class,'index'])->name('shop.product_slug');
    Route::get('/product/{slug}',[ShopProductController::class,'detail'])->name('shop.product_detail');














