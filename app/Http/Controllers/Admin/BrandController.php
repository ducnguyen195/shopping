<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function brand (): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $brands = Brand::all();
        return view('admin.content.brand.indexBrand',['brands'=>$brands]);
    }

    public function addBrandForm (): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.content.brand.addBrand');
    }

    private function fillDate($item,$input): void
    {
        $item["name"] = $input["name"];
        $item['slug'] = $input['slug'] ?? Str::slug($input['name']);
        $item['description'] = $input['description'] ?? "";
        $item->save();

    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $input = $request->all();
        $item = new Brand();
        $this->fillDate( $item,$input);
        return redirect()->route('admin.brand');
    }

    public function editForm ($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $brand = Brand::find($id);
        return view('admin.content.brand.editBrand',['brand'=>$brand]);
    }

    public function update(Request $request,$id) {
        $item = Brand::find($id);
        $input = $request->all();
        $this->fillDate($item,$input);
        return redirect()->route('admin.brand');
    }

    public function destroy($id){
        $brand = Brand::find($id);
        if ($brand){
            $brand->delete();
        }
        return redirect()->route('admin.brand');
    }
}
