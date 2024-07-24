    @extends('layouts.shoppingLayoutWeb')
@section('content')
    <div class="w-full h-full">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> {{$category->name}}</h2>
                <span class="block mt-5 text-sm">
                    <span> Trang chủ /  <strong>  {{$category->name}} </strong> </span>
                </span>
            </div>
        </div>
        <div class="w-full h-full grid grid-cols-4 gap-5 px-32 mt-8">
        {{--   Block 1--}}
            <div class="col-span-1">
                <div class=" border rounded-xl" >
                    <div class="bg-[#3ba66b] px-4 py-3 rounded-t-xl">
                        <h3  class="font-bold text-white uppercase "> {{ $category ? $category->name : 'danh mục'}}</h3>
                    </div>
                    <div class="px-4 py-3">
                        @include('web.component.menu_category',['category' => $category])
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
                            <ul class=" transition-all ease-in-out pb-2">
                                <li class="flex items-center">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2">
                                    Giá dưới 100.000đ
                                </li>
                                <li class="flex items-center mt-3">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2">
                                    100.000đ - 200.000đ
                                </li>
                                <li class="flex items-center mt-3">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2">
                                    200.000đ - 300.000đ
                                </li>
                                <li class="flex items-center mt-3">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2 ">
                                    300.000đ - 500.000đ
                                </li>
                                <li class="flex items-center mt-3">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2 ">
                                    500.000đ - 1.000.000đ
                                </li>
                                <li class="flex items-center mt-3">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2 ">
                                    1.000.000đ - 2.000.000đ
                                </li>
                                <li class="flex items-center mt-3  ">
                                    <input type="checkbox" class="border  rounded outline-none focus:ring-0 mr-2 ">
                                    2.000.000đ - 3.000.000đ
                                </li>
                                <li class="flex items-center mt-3">
                                    <input type="checkbox" class="border rounded outline-none focus:ring-0  mr-2 ">
                                    Giá trên 3.000.000đ
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {{--    Block 2--}}
            <div class="col-span-3  w-full ">
               <div class="flex border-b ">
                   <div >
                       <h3 class=" font-bold inline-block whitespace-nowrap">
                           <i class="fa-solid fa-arrow-down-a-z text-lg"></i> Xếp theo
                       </h3>
                   </div>
                   <div class="flex w-full ml-3" >
                       <ul class=" flex w-full">
                           <li>
                               <a href="{{route('shop.product_slug', ['slug' => $category->slug, ...$query,'name' => 'ASC'])}}" class="font-bold ">
                                   <input type="radio" name="soft" title="Tên A-Z">
                                   Tên A-Z
                               </a>
                           </li>
                           <li class="ml-3">
                               <a href="{{route('shop.product_slug', ['slug' => $category->slug, ...$query,'name' => 'DESC'])}}" class=" focus:sort font-bold">
                                   <input type="radio" name="soft" id="sort" title="Tên Z-A">
                                   Tên Z-A
                               </a>
                           </li>
                           <li  class="ml-3">
                               <a href="{{route('shop.product_slug', ['slug' => $category->slug, ...$query,'price' => 'ASC'])}}" class=" font-bold">
                                   <input type="radio"  name="soft" title="Giá thấp đến cao">
                                   Giá thấp đến cao
                               </a>
                           </li>
                           <li  class="ml-3">
                               <a href="{{route('shop.product_slug', ['slug' => $category->slug, ...$query,'price' => 'DESC'])}}" class=" font-bold">
                                   <input type="radio" name="soft" title="Giá cao đến thấp">
                                   Giá cao đến thấp
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
                <div class="grid grid-cols-4 gap-4 mt-5" id="render_list">
                   @if(count($products) === 0 )
                        <div class="rounded-lg border bg-yellow-100 py-3 px-3 col-span-4">
                            <p class=" text"> Không có sản phẩm nào trong danh mục này.</p>
                        </div>
                    @else
                        @foreach( $products as $product )
                            <div class="grid group/item z-10 rounded-lg border">
                                <div class=" relative overflow-hidden z-20 w-full h-64">
                                    <div class="w-full h-64">
                                        <a href="{{route('shop.product_detail',[$product->slug])}}" class="  flex justify-center">
                                            @foreach( $product->images as $image)
                                                @php $image_path = json_decode($image->path) @endphp
                                                @foreach( array_slice($image_path,0,1) as $path)
                                                    <img src="{{asset($path )}}"  class=" px-5 h-64
                                                        transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " title="{{$product->name}}" alt="{{$image->alt}}">
                                                @endforeach
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center ml-4 gap-2">
                                        <button class="rounded-full bg-[#fe0000] w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"
                                        onclick="handleAddProduct({{$product->id}})">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item my-2 rounded-b-lg ">
                                    <a href="{{route('shop.product_detail',[$product->slug ])}}" class="flex justify-center  ">
                                        <p class="whitespace-nowrap overflow-hidden text-center text-ellipsis text-[15px] font-normal w-44 " title="{{$product->name}}" > {{$product->name}} </p>
                                    </a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> {{number_format($product->price,0,'.','.')}}đ </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                   @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function handleAddProduct(id) {
            console.log(id)
            $.ajax({
               url:'{{route('shop.add_product')}}',
                type: 'POST',
                data: {
                   _token: '{{csrf_token()}}',
                    id: id,
                },
                success: function (response){
                    if (response){
                        showSuccessToast();
                    }
                },
                error: function (error){
                    console.log(error)
                }
            });
        }
    </script>
@endsection
