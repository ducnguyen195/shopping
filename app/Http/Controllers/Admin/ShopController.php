<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private function fillShop($item ,$input): void
    {
        $item["name"] = $input["name"] ?? "";
        $item["address"] = $input["address"] ?? "";
        $item["phone"] = $input["phone"] ?? "";
        $item["image_path"] = isset($input["image_path"]) ? json_encode($input["image_path"]) : json_encode([]);
        $item["google_map"] = $input["google_map"]?? "";
        $item->save();

    }
    public function index(): View|Application|Factory
    {
        $shops = Shop::all();
        return view('admin.content.shop.index',['shops' => $shops]);
    }

    public function add(): View|Application|Factory
    {
        return view('admin.content.shop.addShop');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $item = new Shop();
        $this->fillShop($item,$input);
        return redirect()->route('admin.shop');
    }

    public function edit ($id): View|Application|Factory
    {
        $shop  = Shop::find($id);
        return view('admin.content.shop.editShop',['shop' => $shop]);
    }

    public function update(Request $request,$id): RedirectResponse
    {
        $item = Shop::find($id);
        $input = $request->all();
        $this->fillShop($item,$input);
        return redirect()->route('admin.shop');
    }

    public function destroy($id): RedirectResponse
    {
        $shop = Shop::find($id);
        if ($shop){
            $shop->delete();
        }
        return redirect()->route('admin.shop');
    }
}
