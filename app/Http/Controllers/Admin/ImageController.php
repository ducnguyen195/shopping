<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Traits\GroupImageTrait;

class ImageController extends Controller
{
    use GroupImageTrait;
    private  function fillImage ($item,$input,$type): void
    {
        $item["name"] = $input["name"] ?? "";
        $item["model_type"] = $type ;
        $item["model_id"] = $input["model_id"] ?? null;
        if( $input["path"]){
            $images = $input['path'];
            foreach ($images as $image) {
                if ($image) {
                    $imageDetail = $image;
                    $arrImage[] =  $imageDetail;
                    $item['path'] = json_encode($arrImage);
                }
            }
        }
        $item["alt"] = $input["alt"] ?? '';
        $item->save();
    }

    public function index($type): View|Application|Factory
    {
        $images = Image::with('products')->where('model_type', '=', $type)->paginate(10);
        return view('admin.content.image.index',[
            'images' => $images,
            'type' => $type,
            'type_name' => $this->getImageName($type),
            ]);
    }

    public function add($type): View|Application|Factory
    {
        if ($type == 'product'){
            $item = Product::all();
        } else {
            $item = Post::orderBy('created_at','DESC')->get();
        }
        return view('admin.content.image.addImage',[
            'item' => $item ,
            'type' => $type,
            'type_name' => $this->getImageName($type),
        ]);
    }

    public  function store (Request $request,$type): RedirectResponse
    {
        $input  = $request->all();
        $item = new Image();
        $this->fillImage($item,$input,$type);
        return redirect()->route('admin.image',['type' => $type]);
    }

    public function edit ($type,$id): View|Application|Factory
    {
        $image = Image::find($id);
        return view('admin.content.image.editImage',[
            'image' => $image,
            'type'=> $type,
            ]);
    }

    public function update (Request $request,$type,$id): RedirectResponse
    {
        $input = $request->all();
        $item = Image::find($id);
        $this->fillImage($item,$input,$type);
        return redirect()->route('admin.image',[$type]);
    }

    public function destroy ($id): RedirectResponse
    {
        $image = Image::find($id);
        if ($image){
            $image ->delete();
        }
        return redirect()->route('admin.image');
    }
}
