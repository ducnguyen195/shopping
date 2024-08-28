<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ShopProductController extends Controller
{
    private function filterProduct($products, $request)
    {
        if ($request->has('name')){
            $products->orderBy('name',$request->name);
        }
        if ($request->has('price')){
            $products->orderBy('price',$request->price);
        }
        if ($request->has('min_price') && $request->has('max_price')){
            $products->whereBetween('price',[(int)$request->min_price,(int)$request->max_price]);
        }
        return $products;
    }

    public function listProduct(Request $request): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        $products = Product::query();
        $products = $this->filterProduct($products,$request);
        return view('web.content.list-product.all_product',[
            'products' => $products->paginate(12),
            'categories' => $categories,
            'cartQuantity'=> $cartTotalQuantity,
            'query' => $request->query(),
        ]);
    }

    public function index($slug,Request $request): View|Application|Factory|RedirectResponse
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        $category = Category::where('slug','=',$slug)->first();
        if(!$category) return redirect()->back();
        $subCategory = $category->getChildren()->pluck('id')->toArray();
        $subCategory[] = $category->id;
        $subCategory = Arr::flatten($subCategory);
        $products = Product::query()->whereIn('category_id',$subCategory);
        $minPrice = floor($products->min('price') /1000000) * 1000000;
        $maxPrice = ceil($products->max('price') /1000000) * 1000000;
        $this->filterProduct($products,$request);

        return view('web.content.list-product.listProduct',[
            'category' => $category,
            'cartQuantity'=> $cartTotalQuantity,
            'categories' => $categories,
            'products' => $products->paginate(12),
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'query' => $request->query(),
        ]);
    }

    public function detail ($slug): View|Application|Factory
    {
        if ( Auth::user()) {
            $userID =  Auth::user()->id;
            $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        }else{
            $cartTotalQuantity = 0;
        }
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        $product = Product::where('slug','=',$slug)->get();
        return view('web.content.product_detail.productDetail',[
            'categories' => $categories,
            'product'=>$product,
            'cartQuantity'=> $cartTotalQuantity,
        ]);
    }
}
