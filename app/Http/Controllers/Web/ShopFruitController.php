<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopFruitController extends Controller
{
    public function index (): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }

        $shops = Shop::all();
        $allSale = Product::where('discount_persent','!=',0)->get();
        $sale_products = $allSale->take(10);
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        return view('web.content.shopping',[
            'categories' => $categories,
            'sale_products' => $sale_products,
            'shops' => $shops,
            'cartQuantity'=> $cartTotalQuantity,
            ]);
    }

    public function introduce(): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        return view('web.content.introduce.introduce',[
            'categories' => $categories,
            'cartQuantity'=> $cartTotalQuantity,
            ]);
    }

    public function blog (): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        return view('web.content.blog.blog',[
        'categories' => $categories,
        'cartQuantity'=> $cartTotalQuantity,
        ]);
    }

    public function contact(): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }
        $shops = Shop::pluck('address');
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        return view('web.content.contact.contact',[
            'categories' => $categories ,
            'shops' => $shops,
            'cartQuantity'=> $cartTotalQuantity,
        ]);
    }

    public function favourite(): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }

        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        return view('web.content.favourite.favourite',[
            'categories'=> $categories,
            'cartQuantity'=> $cartTotalQuantity,
        ]);
    }
}
