<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    private function fillPost($item, $input): void
    {
        $item["name"] = $input["name"];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['category_id'] = $input['category_id'] ?? null;
        $item['description'] = $input['description'] ?? "";
        $item['content'] = $input['content'] ?? "";
        $item['seo_title'] = $input['seo_title'] ?? '';
        $item['seo_keywords'] = $input['seo_keywords'] ?? '';
        $item['seo_description'] = $input['seo_description'] ?? '';
        $item['rating_value'] = 0;
        $item['rating_number'] = 0;
        $item['viewer'] = 0;
        $item->save();
    }
    public function index(): View|Application|Factory
    {
        $posts = Post::whereHas('category', function ($query){
            $query->where('model_type', '=', 'post');
         })->paginate(10);
        return view('admin.content.post.index',[
            "post" =>$posts
        ]);
    }

    public function add(): View|Application|Factory
    {
        $category = Category::where('model_type','=','post')->where('parent_id','=',0)->with('children')->get();
        return view('admin.content.post.addFormPost',['category' => $category]);
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $item = new Post();
        $this->fillPost($item,$input);
        return redirect()->route('admin.post');
    }

    public function edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::find($id);
        $category = $post->category;
        return view('admin.content.post.editPost',['post'=> $post,'category'=>$category]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $input = $request->all();
        $item = Post::find($id);
        $this->fillPost($item,$input);
        return redirect()->route('admin.post');
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::find($id);
            if($post){
                $post->delete();
            }
            return redirect()->route('admin.post');
    }
}
