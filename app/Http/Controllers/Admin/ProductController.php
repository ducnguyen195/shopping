<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @method delete()
 */
class ProductController extends Controller
{
    private function fillPost ($post, $input): void
    {
        $post["name"] = $input["post_name"] ??$input["name"];
        $post["slug"] = $input["post_slug"] ?? Str::slug($post["name"]);
        $post['category_id'] = $input['post_category_id'] ?? $input["category_id"]  ;
        $post['description'] = $input['post_description'] ?? '';
        $post['content'] = $input['post_content'] ?? '';
        $post["seo_title"] = $input["seo_title"] ?? '';
        $post["seo_keywords"] = $input["seo_keywords"] ?? '';
        $post["seo_description"] = $input["seo_description"] ?? '';
        if (true){
            $post["rating_value"] = 0;
            $post["rating_number"] = 0;
            $post["viewer"] = 0;
        }
        $post->save();
    }

    private  function fillProduct($product, $input): void
    {
        $product["name"] = $input["name"];
        $product['barcode'] = $input['barcode'] ?? '';
        $product['category_id'] = $input['category_id'] ?? null;

        $product['slug'] = $input['slug'] ?? Str::slug($input['name'] .' '. $input['barcode'] );
        $product['description'] = $input['description'] ?? "";
        $product['quantity'] = $input['quantity'] ?? "";
        $product['price'] = str_replace('.','',$input['price']) ?? "";
        $product['brand_id'] = $input['brand_id'] ?? null;
        $product['post_id'] = $input['post_id'] ?? null;
        $product['discount_persent'] = $input['discount_persent'] ?? 0;
       if (true){
           $product["view"] = 0;
           $product["rating_number"] = 0;
           $product["rating_value"] = 0;
       }
        $product->save();
    }

    public function index (): View|Application|Factory
    {
        $products = Product::with('images')->paginate(10);
        return view('admin.content.product.index',[
            'products' => $products,
            ]);
    }

    public  function add (): View|Application|Factory
    {
        $categories = Category::where('model_type','=','product')->where('parent_id','=','0')->with('children')->get();
        $brand = Brand::all();
        $post = Post::all();
        $cate_post = Category::where('model_type', '=','post')->where('parent_id','=',0)->get();
        return view('admin.content.product.addProduct',[
            'categories' => $categories ,
            'brand' => $brand,
            'cate_post'=> $cate_post,
            'posts' => $post,

        ]);
    }

    public function store (Request $request): RedirectResponse
    {
        $input = $request ->all();
        $post = new Post();
        $this->fillPost($post, $input);

        $product = new Product();
        $input["post_id"]  =  $post->id;
        $this->fillProduct($product, $input);
        return redirect()->route("admin.product");
    }

    public function edit ($id): View|Application|Factory
    {
        $product = Product::find($id);
        $post = $product->post->first();
        $current_post = $post->getPostCategory();
        $posts = Post::where('id','!=',$post)->get();
        $brands = Brand::where('id','!=',$product->brand->id)->get();
        $categories = Category::where('id','!=',$product->category_id)->get();
        $cate_post = Category::where('id','!=',$post->category_id)->where('model_type','=','post')->get();

        return view('admin.content.product.editProduct',[
            'product' => $product,
            'categories' => $categories,
            'cate_post' => $cate_post,
            'posts' => $posts,
            'brands' => $brands,
            'current_post' => $current_post,
        ]);
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $input = collect($request->all());
        $post = Post::find($input['post_id']);
        $this->fillPost($post, $input);

        $product = Product::find($id);
        $this->fillProduct($product,$input);

        return redirect()->route('admin.product');
    }

    public function destroy($id): RedirectResponse
    {
        $product = Product::find($id);
        if ($product){
            $product->delete();
        }
        return redirect()->route('admin.product');
    }
}
