<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Psy\Util\Str;

class PostController extends Controller
{
    private function fillPost($item, $input): void
    {
        $item["name"] = $input["name"];
        $item['slug'] = $input['slug'] ?? Str::slug($input('name'));
        $item['category_id'] = $input['category_id'];
        $item['description'] = $input['description'];
        $item['content'] = $input['content'];
        $item['seo_title'] = $input['seo_title'];
        $item['seo_keywords'] = $input['seo_keywords'];
        $item['seo_description'] = $input['seo_description'];
        $item['rating_value'] = 0;
        $item['rating_number'] = 0;
        $item['viewer'] = 0;
        $item->save();

    }
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::all();

        return view('admin.content.post.index',['post' => $post ]);
    }

    public function add(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $category = Category::all();
        return view('admin.content.post.addFormPost',['category' => $category]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
        $item = new Post();
        $this->fillPost($item,$input);
        return redirect()->route('admin.post');
    }

    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::find($id);
        $category = $post->category;
        return view('admin.content.post.editPost',['post'=> $post,'category'=>$category]);
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
        $item = Post::find($id);
        $this->fillPost($item,$input);
        return redirect()->route('admin.post');
    }

    public function destroy($id) {
        $post = Post::find($id);
            if($post){
                $post->delete();
            }
            return redirect()->route('admin.post');
    }
}
