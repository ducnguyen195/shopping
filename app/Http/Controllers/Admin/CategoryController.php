<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\GroupCategoryTrait;

class CategoryController extends Controller
{
    use GroupCategoryTrait;
    private function fillCategory($item,$input,$model_type): void
    {
        $item["name"] = $input["name"];
        $item['parent_id'] = $input['parent_id'];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['icon_path'] = $input['icon_path'] ?? "";
        $item['model_type'] = $model_type;
        $item->save();
    }

    public function category ($model_type): View|Application|Factory
    {
        $category = Category::where('model_type','=',$model_type)->paginate(10);
        return view('admin.content.category.index',[
            'category' => $category,
            'model_type'=> $model_type,
            'type_name' => $this->getGroupName($model_type),
        ]);
    }

    public function addCategoryForm($model_type): View|Application|Factory
    {
        $option_parent_id = Category::where('parent_id','=',0)->where('model_type','=',$model_type)->with('children')->get();
        return view('admin.content.category.addCategory',['option_parent_id' => $option_parent_id ,'model_type'=>$model_type]);
    }

    public function store($model_type, Request $request): RedirectResponse
    {
        $input = $request->all();
        $item = new Category();
        $this->fillCategory($item, $input,$model_type);
        return redirect()->route('admin.category',[$model_type]);
    }

    public function editForm($model_type,$id): View|Application|Factory
    {
        $category_parent = Category::where('parent_id','=',0)->with('children')->get();
        $category = Category::find($id);
        return view('admin.content.category.editCategory',[
            'category'=> $category,
            'category_parent' =>$category_parent,
            'model_type' =>$model_type,
            ]);
    }

    public function update($model_type,Request $request,$id): RedirectResponse
    {
        $input = $request->all();
        $item = Category::find($id);
        $this->fillCategory($item,$input,$model_type);
        return redirect()->route('admin.category',['model_type' => $model_type]);
    }

    public function destroy ($model_type,$id): RedirectResponse
    {
        $category = Category::find($id);
        if($category){
            $category->delete();
        }
        return redirect()->route('admin.category',$model_type);

    }
}
