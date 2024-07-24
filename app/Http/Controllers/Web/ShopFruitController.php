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

        $shops = Shop::all();
        $sale_products = Product::where('discount_persent','!=',0)->get();
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        $cate_product= $categories->chunk(5);
        return view('web.content.shopping',[
            'categories' => $categories,
            'sale_products' => $sale_products,
            'shops' => $shops,
            'cate_product' => $cate_product,

            ]);
    }


}
