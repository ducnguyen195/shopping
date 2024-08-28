@extends('layouts.shoppingLayoutWeb')
    @section('title','Tất cả sản phẩm | Shoponline.th')
@section('content')
    <div class="w-full h-full  mb-24">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Tất cả sản phẩm</h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ </a> /  <strong>  Tất cả sản phẩm </strong> </span>
                </span>
            </div>
        </div>
        <div class="w-full h-full grid grid-cols-4 gap-5 px-32 mt-8">
        {{--   Block 1--}}
            <div class="col-span-1">
                <div class=" border rounded-xl" >
                    <div class="bg-[#3ba66b] px-4 py-3 rounded-t-xl">
                        <h3  class="font-bold text-white uppercase "> Danh Mục</h3>
                    </div>
                    <div class="px-4 py-3 text-[15px] font-normal">
                        @foreach($categories as $category )
                            <li class="block relative mt-3"  id="menu-category-{{ $category->id}}" data-accordion="open">
                                <a href="{{route('shop.product_slug',['slug' => $category->slug ,...$query ])}}" class="hover:text-amber-400" > {{$category->name}} </a>
                                <span class="text-sm text-gray-900 cursor-pointer absolute right-0 "  data-accordion-target="#menu-category-body-{{$category->id}}" aria-expanded="false" aria-controls="menu-category-body-{{$category->id}}">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                                @if($category->children)
                                    <ul class="ml-5 hidden " id="menu-category-body-{{ $category->id}}">
                                    @foreach($category->children as $child)
                                            <li class="mt-2" >
                                                <a href="{{route('shop.product_slug',['slug' => $child->slug , ...$query ])}}" class="hover:text-amber-400 " > {{$child->name}} </a>
                                            </li>
                                    @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </div>
                </div>
                <div class=" border rounded-xl mt-5" >
                    <div class="bg-[#3ba66b] px-4 py-3 rounded-t-xl">
                        <h3  class="font-bold text-white "> LỌC SẢN PHẨM </h3>
                    </div>
                    <div class="px-4 py-3 group/edit "  id="menu-price" data-accordion="open">
                        <div class="relative hover:text-amber-400 font-bold cursor-pointer "  data-accordion-target="#menu-price-body" aria-expanded="true" aria-controls="menu-price-body" >
                            Giá sản phẩm
                            <i  data-accordion-icon class="fa-solid fa-minus absolute right-0 top-2 cursor-pointer "></i>
                            <i  class="fa-solid fa-plus absolute right-0 top-2 cursor-pointer "></i>
                        </div>
                        <div id="menu-price-body" class="hidden mt-4 group/edit" >
                            <ul class=" transition-all ease-in-out pb-2 text-[15px]">
                                <a href="{{route('shop.list_product',[...$query, 'min_price' => 0, 'max_price' => '100000' ])}}">
                                    <li class="flex items-center">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center">
                                            <input type="checkbox" id="filter_price-1" class="border rounded outline-none focus:ring-0  mr-2" value="(<100000)"  @if (isset($query['max_price']))
                                                   @if($query['max_price'] == 100000) checked @endif
                                                @endif>
                                            Giá dưới 100.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '100000' , 'max_price' => '200000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value="(<100000)"  @if (isset($query['max_price']))
                                                    @if ($query['max_price'] == 200000)
                                                        checked
                                                    @endif
                                                @endif>
                                              100.000đ - 200.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '200000' , 'max_price' => '300000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value="(<100000)"  @if (isset($query['max_price']))
                                                @if ($query['max_price'] == 300000)
                                                    checked
                                                @endif
                                                @endif>
                                            200.000đ - 300.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '500000' , 'max_price' => '500000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value=""  @if (isset($query['max_price']))
                                                @if ($query['max_price'] == 500000)
                                                    checked
                                                @endif
                                                @endif>
                                            300.000đ - 500.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '500000' , 'max_price' => '1000000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value=""  @if (isset($query['max_price']))
                                                @if ($query['max_price'] == 1000000)
                                                    checked
                                                @endif
                                                @endif>
                                            500.000đ - 1000.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '1000000' , 'max_price' => '2000000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value=""  @if (isset($query['max_price']))
                                                    @if ($query['max_price'] == 2000000)
                                                        checked
                                                    @endif
                                                @endif>
                                            1000.000đ - 2000.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '2000000' , 'max_price' => '3000000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value=""  @if (isset($query['max_price']))
                                                @if ($query['max_price'] == 3000000)
                                                    checked
                                                @endif
                                                @endif>
                                            2000.000đ - 3000.000đ
                                        </label>
                                    </li>
                                </a>
                                <a href="{{route('shop.list_product',[...$query,'min_price' => '3000000' , 'max_price' => '100000000' ])}}">
                                    <li class="flex items-center mt-3">
                                        <label for="" class="cursor-pointer hover:text-amber-400 flex items-center" >
                                            <input type="checkbox"  id="filter_price-2" class="border rounded outline-none focus:ring-0  mr-2" value=""  @if (isset($query['max_price']))
                                                @if ($query['max_price'] == 100000000)
                                                    checked
                                                @endif
                                                @endif>
                                            Giá trên 3000.000đ
                                        </label>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {{--    Block 2--}}
            <div class="col-span-3  w-full ">
               <div class="flex border-b items-center pb-2 ">
                   <div >
                       <h3 class=" font-bold  whitespace-nowrap flex items-center gap-1">
                           <i class="fa-solid fa-arrow-down-a-z text-lg"></i> Xếp theo
                       </h3>
                   </div>
                   <div class="flex w-full ml-3" >
                       <ul class=" flex w-full text-sm">
                           <li >
                               <a href="{{route('shop.list_product', [ ...$query,'name' => 'ASC'])}}" class="font-bold  flex gap-2 items-center">
                                   <input type="radio" id="sort_AZ" name="soft" title="Tên A-Z">
                                   <label for="sort_AZ"> Tên A-Z </label>
                               </a>
                           </li>
                           <li class="ml-3">
                               <a href="{{route('shop.list_product', [ ...$query,'name' => 'DESC'])}}" class="  flex gap-2 items-center focus:sort font-bold">
                                   <input type="radio" name="soft" id="sort_ZA" title="Tên Z-A">
                                   <label for="sort_ZA"> Tên Z-A</label>
                               </a>
                           </li>
                           <li  class="ml-3">
                               <a href="{{route('shop.list_product', [ ...$query,'price' => 'ASC'])}}" class=" flex gap-2 items-center font-bold">
                                   <input type="radio" id="price_dow"  name="soft" title="Giá thấp đến cao">
                                   <label for="price_dow"> Giá thấp đến cao</label>
                               </a>
                           </li>
                           <li  class="ml-3">
                               <a href="{{route('shop.list_product', [ ...$query,'price' => 'DESC'])}}" class=" flex gap-2 items-center font-bold">
                                   <input type="radio" name="soft" id="price_up" title="Giá cao đến thấp">
                                   <label for="price_up"> Giá cao đến thấp </label>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
                <div class="grid grid-cols-4 gap-4 mt-5" id="render_list">
                    @if(count($products) === 0)
                        <div class="rounded-lg border bg-yellow-100 py-3 px-3 col-span-4">
                            <p class=" text"> Không có sản phẩm nào trong danh mục này.</p>
                        </div>
                    @else
                        @foreach( $products as $product )
                            <div class="grid group/item z-10 rounded-lg border">
                                <div class=" relative overflow-hidden z-20 w-full h-56 ">
                                    <a href="{{route('shop.product_detail',[$product->slug ,$product->id])}}" class=" flex justify-center">
                                        @foreach( $product->images as $image)
                                            @php $image_path = json_decode($image->path) @endphp
                                            @foreach( array_slice($image_path,0,1) as $path)
                                                <img src="{{asset($path )}}"  class=" px-5 w-full h-56
                                                    transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " title="{{$product->name}}" alt="{{$image->alt}}">
                                            @endforeach
                                        @endforeach
                                    </a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                        group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center ml-4 gap-2">
                                        <button class="rounded-full bg-[#fe0000] w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                        @guest
                                            <a href="{{route('shop.login_form')}}">
                                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"
                                                        onclick="">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </button>
                                            </a>
                                        @else
                                            <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"
                                                    onclick="handleAddProduct({{$product->id}})">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        @endguest
                                    </div>
                                    @if($product->discount_persent)
                                        <div class="absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-lg font-normal px-2  ">
                                            <span class="text-white text-sm line-clamp-1"> -{{ $product->discount_persent}}% </span>
                                        </div>
                                    @endif
                                </div>
                                <div class=" z-30 bg-white group/item my-2 rounded-b-lg ">
                                    <a href="{{route('shop.product_detail',[$product->slug ])}}" class="flex justify-center  ">
                                        <p class="whitespace-nowrap overflow-hidden text-center text-ellipsis text-[15px] font-normal w-44 " title="{{$product->name}}" > {{$product->name}} </p>
                                    </a>
                                    <div class="flex gap-4 justify-center items-center text-[15px]">
                                        <span class="text-red-500 font-bold"> {{ number_format($product->price*(1-$product->discount_persent*0.01), 0, ',', '.') }}₫ </span>
                                        @if($product->discount_persent)
                                            <span class="text-gray-400 text-sm line-through"> {{number_format($product->price,0,',','.')}}₫ </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class=" px-32 mt-9">
            {{$products->links('vendor.pagination.tailwind')}}
        </div>
    </div>
@endsection
