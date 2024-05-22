<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private function fillCategory($item,$input,$model_type): void
    {
        $item["name"] = $input["name"];
        $item['parent_id'] = $input['parent_id'];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['icon_path'] = $input['icon_path'];
        $item['model_type'] = $model_type;
        $item->save();
    }

    public function category ($model_type): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $category = Category::where('model_type','=',$model_type)->get();
        return view('admin.content.category.index',['category' => $category,'model_type'=> $model_type]);
    }

    public function addCategoryForm($model_type): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $option_parent_id = Category::where('parent_id','=',0)->with('children')->get();
        return view('admin.content.category.addCategory',['option_parent_id' => $option_parent_id ,'model_type'=>$model_type]);
    }

    public function store($model_type, Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
        $item = new Category();
        $this->fillCategory($item, $input,$model_type);
        return redirect()->route('admin.category',[$model_type]);
    }

    public function editForm($model_type,$id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $category_parent = Category::where('parent_id','=',0)->with('children')->get();
        $category = Category::find($id);
        return view('admin.content.category.editCategory',[
            'category'=> $category,
            'category_parent' =>$category_parent,
            'model_type' =>$model_type,
            ]);
    }

    public function update($model_type,Request $request,$id): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
        $item = Category::find($id);
        $this->fillCategory($item,$input,$model_type);
        return redirect()->route('admin.category',['model_type' => $model_type]);
    }

    public function destroy ($model_type,$id): \Illuminate\Http\RedirectResponse
    {
        $category = Category::find($id);
        if($category){
            $category->delete();
        }
        return redirect()->route('admin.category',$model_type);

    }
}
