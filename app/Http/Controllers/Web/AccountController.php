<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account(): View|Application|Factory
    {
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();

        return view('web.content.account.account',[
            'categories' => $categories
        ]);
    }

    public function orders (): View|Application|Factory
    {
        $categories = Category::where('model_type','=','product')->where('parent_id','=',0)->with('children')->get();
        return view('web.content.account.order',[
            'categories' => $categories
        ]);
    }
}
