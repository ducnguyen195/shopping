<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
             'quantity' =>1,
             'attributes' => array(
                 'image' => $image_path[0],
             )
         ));
            $items = \Cart::session($userID)->getContent();
         return  response()->json( $items,200);
    }

    public function getCart(): JsonResponse
    {
        $userID = Auth::user()->id;
        $itemsContent = \Cart::session($userID)->getContent();
        $itemsContent->toArray();
        $subTotal = \Cart::session($userID)->getTotal();
        return response()->json(['items' => $itemsContent,'subTotal'=>$subTotal],200);
    }

    public function update(Request $request) {

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
