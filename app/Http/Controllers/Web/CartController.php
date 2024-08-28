<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Providers\RouteServiceProvider;
use Darryldecode\Cart\Cart;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @method showSuccessToast()
 */
class CartController extends Controller
{

    public  function __construct() {
        $this->middleware('auth:web');
    }

    public function index(): View|Application|Factory
    {
        $userID = Auth::user()->id;
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        $itemsContent = \Cart::session($userID)->getContent();
        $cartTotalQuantity = \Cart::session($userID)->getTotalQuantity();
        $subTotal = \Cart::session($userID)->getTotal();
        return view('web.content.cart.cart_detail',[
            'categories' => $categories,
            'itemsContent' => $itemsContent,
            'cartTotalQuantity' => $cartTotalQuantity,
            'subTotal' => $subTotal,
            ]);
    }

    public function quantityCart(): JsonResponse
    {
        $userID = Auth::user()->id;
        $quantityCart = \Cart::session($userID)->getTotalQuantity();
        return response()->json(['quantityCart'=> $quantityCart],200);
    }

    public function add(Request $request): JsonResponse
    {
        $userID = Auth::user()->id;
        $input = $request->all();
        $product = Product::find($input['id']);
        $images = $product->images;
        $image_path = json_decode($images[0]->path);
         \Cart::session($userID)->add(array(
             'id' => $product->id ,
             'name' => $product->name,
             'price' =>  $product->price*(1-$product->discount_persent/100),
             'quantity' =>  1,
             'attributes' => array(
                 'image' => $image_path[0],
                 'barcode' => $product->barcode
             )
         ));
            $items = \Cart::session($userID)->getContent();
         return  response()->json( ['items' => $items],200);
    }

    public function getCart(): JsonResponse
    {
        $userID = Auth::user()->id;
        $itemsContent = \Cart::session($userID)->getContent();
        $itemsContent->toArray();
        $subTotal = \Cart::session($userID)->getTotal();
        return response()->json(['items' => $itemsContent,'subTotal'=>$subTotal],200);
    }

    public function store(Request $request): JsonResponse
    {
        $userID = Auth::user()->id;
        $input = $request->all();
        $product = Product::find($input['id']);
        $images = $product->images;
        $image_path = json_decode($images[0]->path);
        \Cart::session($userID)->add(array(
            'id' => $product->id ,
            'name' => $product->name,
            'price' =>  $product->price*(1-$product->discount_persent/100),
            'quantity' => $input['quantity'],
            'attributes' => array(
                'image' => $image_path[0],
            )
        ));
            $items = \Cart::session($userID)->getContent();
        return  response()->json( ['items' => $items],200);
    }

    public function update(Request $request): JsonResponse
    {
        $userID = Auth::user()->id;
        $input = $request->all();
        \Cart::session($userID)->update($input['id'], array(
            'quantity' => $input['quantity'] ,
        ));
            $subTotal = \Cart::session($userID)->getTotal();
            $items = \Cart::session($userID)->getContent();
        return  response()->json( [
            'subTotal'=>$subTotal,
            'items' =>$items,
        ],200);

    }

    public function destroy (Request $request): JsonResponse
    {
        $userID = Auth::user()->id;
        $input  = $request->all();
        \Cart::session($userID)->remove($input['id']);
        $subTotal = \Cart::session($userID)->getTotal();
        $itemsContent = \Cart::session($userID)->getContent();
        return response()->json(['items' => $itemsContent,'subTotal'=>$subTotal]);
    }
}
