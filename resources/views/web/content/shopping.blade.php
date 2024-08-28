@extends('layouts.shoppingLayoutWeb')
@section("title" ,'Trái cây nhập khẩu | Shoponline.th')
@section('content')
    <div class="">
        <div class="swiper mySwiper1 w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide"> <img src="{{asset('images/slider_1.webp')}}" alt=""> </div>
                <div class="swiper-slide"> <img src="{{asset('images/slider_2.webp')}}" alt=""> </div>
                <div class="swiper-slide"> <img src="{{asset('images/slider_3.webp')}}" alt=""> </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        let swiper1 = new Swiper(".mySwiper1", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <div class="swiper mySwiper2 px-28 mt-14 w-full h-full ">
        <div class="swiper-wrapper p-3 ">
            @foreach($shops as $shop)
                <div class="swiper-slide  rounded-lg shadow-lg w-full ">
                    <div class=" h-full  px-5">
                        @php $shopImg = json_decode($shop->image_path) @endphp
                        <a href="" class="hover:pt-10" >
                            <img class="rounded transition-all ease-in-out hover:translate-y-0.5 w-full h-80  " src="{{asset($shopImg[0])}}" alt="">
                        </a>
                        <a href="" class="">
                            <h4 class="mt-3 mb-2 flex justify-center font-medium"> {{$shop->name}}</h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        let swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 4,
            spaceBetween: 30,
            autoplay: true,
            playspeed:3000,
            breakpoints: {
                300: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1199: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>
    <div class="px-32 mt-14 w-full h-full ">
        <div class="border-2 border-red-500 rounded-lg mt-20 ">
            <div class="flex justify-center  relative ">
               <h2 class="absolute -bottom-9  w-72 p-2 h-20 rounded-full shadow-2xl bg-white flex items-center justify-center ">
                   <a href="" class="flex font-bold text-2xl text-gray-500  ">
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 511.548 511.548" style=" enable-background:new 0 0 511.548 511.548;" xml:space="preserve" width="32" height="32"> <g>
                               <path style="fill:#FF6200;" d="M394.441,191.548C307.52,95.547,287.775,20.882,287.775,20.882s-15.054,6.718-32,22.11
                             l-21.333,244.556l21.333,209h0.001c104.842-0.001,189.833-84.992,189.833-189.833C445.608,263.409,421.423,221.349,394.441,191.548   z"></path>
                               <path style="fill:#FD7D21;" d="M223.775,84.882c-10.873,21.747-13.434,46.265-13.33,65.08c0.1,18.252-12.758,34.004-30.655,37.584
                             c-12.504,2.501-25.43-1.413-34.447-10.43l-17.568-17.568c0,0-26.044,35.911-30.507,42.667   c-20.047,30.346-31.613,66.786-31.321,105.945c0.778,104.581,85.244,188.388,189.828,188.388V42.992
                                C244.69,53.06,232.797,66.838,223.775,84.882z"></path> <g> <path style="fill:#FFB62D;" d="M405.561,181.48c-43.372-47.903-69.147-90.072-83.134-117.013    c-15.148-29.181-20.112-47.276-20.15-47.42L297.768,0l-16.104,7.183c-0.917,0.409-11.941,5.434-25.89,16.238l-10.667,18.794
                                   l10.667,22.117c8.336-9.351,16.934-16.341,23.849-21.18c11.282,28.696,39.881,87.981,103.699,158.465    c14.217,15.702,47.285,57.376,47.285,105.099c0,96.403-78.43,174.833-174.832,174.833h-0.001l-10.667,19.333l10.667,10.667h0.001    c112.945-0.001,204.832-91.888,204.832-204.833C460.608,265.764,440.544,220.118,405.561,181.48z"></path>
                                   <path style="fill:#FDCB02;" d="M132.499,430.925c-32.898-32.646-51.206-76.285-51.553-122.876    c-0.26-34.878,9.712-68.616,28.837-97.565c2.335-3.534,11.702-16.602,19.833-27.879l5.119,5.119    c12.592,12.592,30.53,18.025,47.996,14.532c24.888-4.978,42.852-27.004,42.713-52.375c-0.087-15.701,1.881-38.558,11.746-58.29
                                  c5.351-10.702,11.883-19.741,18.584-27.258V23.421c-14.692,11.381-32.628,29.175-45.417,54.753    c-12.515,25.031-15.018,52.9-14.913,71.87c0.061,11.04-7.761,20.626-18.598,22.793c-7.598,1.518-15.414-0.844-20.898-6.328    l-29.997-29.997l-10.319,14.229c-1.071,1.477-26.289,36.256-30.88,43.205c-22.419,33.937-34.109,73.47-33.806,114.325
                                     c0.406,54.565,21.864,105.686,60.421,143.948c38.554,38.259,89.839,59.329,144.407,59.329v-30    C209.176,481.548,165.396,463.57,132.499,430.925z"></path> </g>
                               <g> <path style="fill:#ED3800;" d="M255.775,206.042c-0.111,0-0.222,0.004-0.333,0.004l-24.997,117.329l24.997,117.329    c0.111,0,0.222,0.004,0.333,0.004c64.801,0,117.333-52.532,117.333-117.333C373.108,258.574,320.576,206.042,255.775,206.042z"></path>
                                   <path style="fill:#FF4B00;" d="M138.441,323.375c0,64.69,52.352,117.149,117,117.329V206.046    C190.794,206.226,138.441,258.685,138.441,323.375z"></path> </g> <g> <polygon style="fill:#D9E7EC;" points="319.432,254.503 286.177,254.503 255.441,299.513 245.108,340.882 255.441,348.214   "></polygon>
                                   <path style="fill:#D9E7EC;" d="M306.248,317.472c-20.858,0-36.601,13.971-36.601,38.372c0,24.597,15.742,38.371,36.601,38.371    s36.601-13.774,36.601-38.371C342.849,331.443,327.106,317.472,306.248,317.472z M306.248,372.963    c-4.329,0-8.658-3.936-8.658-17.12c0-13.184,4.329-17.12,8.658-17.12s8.658,3.936,8.658,17.12    C314.906,369.027,310.577,372.963,306.248,372.963z"></path>
                                   <polygon style="fill:#FAFCFD;" points="225.372,392.247 255.441,348.214 255.441,299.513 192.117,392.247   "></polygon> <path style="fill:#FAFCFD;" d="M241.902,290.907c0-24.4-15.742-38.372-36.601-38.372s-36.601,13.971-36.601,38.372    c0,24.597,15.742,38.372,36.601,38.372S241.902,315.504,241.902,290.907z M196.643,290.907c0-13.184,4.329-17.12,8.658-17.12
                                  c4.329,0,8.658,3.936,8.658,17.12c0,13.184-4.329,17.12-8.658,17.12C200.972,308.027,196.643,304.091,196.643,290.907z"></path> </g> </g> </svg>
                       Ưu Đãi Trong Tuần
                   </a>
               </h2>
            </div>
            {{--     Product Sale--}}
            <div class="grid grid-cols-5 p-4 font-semibold bg-white border-red-500 rounded-lg ">
                @foreach( $sale_products->chunk(2) as $chunk)
                    <div class=" py-10  w-full h-full grid-rows-3 bg-white ">
                        @foreach($chunk as $sale_product)
                            <div class=" grid-rows-2 group/item pt-4 z-10 px-6   ">
                                <div class="relative rounded-lg overflow-hidden z-20 h-62 ">
                                    @foreach($sale_product->images as $image)
                                        @php $image_path = json_decode($image->path) @endphp
                                        <a href="{{route('shop.product_detail',['slug' => $sale_product->slug])}}" class="">
                                            <img src="{{asset($image_path[0])}}" class="p-1 w-full h-72  rounded-lg
                                                 transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0" title="{{$sale_product->name}}" alt=" {{$image? $image->alt : $sale_product->name }}">
                                        </a>
                                    @endforeach
                                    <div class="absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-lg font-normal px-2 ">
                                        <span class="text-white text-sm line-clamp-1"> -{{ $sale_product->discount_persent}}% </span>
                                    </div>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                    group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
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
                                                    onclick="handleAddProduct({{$sale_product->id}})">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        @endguest
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class=" text-[15px] hover:text-amber-400 text-gray-800 font-normal " title="{{$sale_product->name .' '. $sale_product->barcode}}">
                                        <p class="whitespace-nowrap text-ellipsis overflow-hidden text-center">
                                            {{$sale_product->name .' '. $sale_product->barcode}}
                                        </p>
                                    </a>
                                    <div class="flex gap-4 justify-center items-center">
                                        @php $price_discount =$sale_product->price - (( $sale_product->price * $sale_product->discount_persent)/100) @endphp
                                        <span class="text-red-500 font-bold">{{ number_format($price_discount,0,',','.') }}đ</span>
                                        <span class="text-gray-400 text-sm line-through"> {{number_format($sale_product->price,0,',','.')}}đ</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        {{--     FeddBack--}}
        <div class="w-full ">
            <div class="w-full flex justify-center mt-14">
                <div class="text-2xl" >
                    <h2 class="text-4xl text-blue-900 font-bold "> Khách hàng nói về chúng tôi</h2>
                    <span class="flex justify-center pt-3"> <img src="{{asset('images/bg-title-after.webp')}}" alt=""></span>
                </div>
            </div>
            <div>
                <div class=" grid grid-cols-2 gap-5 pt-8">
                    <div class="m-2  bg-white overflow-hidden rounded-3xl ">
                        <img src="{{asset('images/banner_1.webp')}}" class=" rounded-3xl transition-all ease-in-out  hover:scale-105" alt="">
                    </div>
                    <div class="p-2 bg-white overflow-hidden rounded-3xl ">
                        <img src="{{asset('images/banner_2.webp')}}" class="rounded-3xl transition-all ease-in-out  hover:scale-105" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{--     Block product 1--}}
        <div class="w-full h-full grid grid-cols-12 gap-6 mt-8">
            @if(isset($categories[0]))
            <div style="background-image:url('{{asset($categories[0]->icon_path)}}');" class=" rounded-3xl col-span-3 bg-cover  bg-center w-full h-[100%]">
                    @php $query = [] @endphp
                <div class="p-8 " >
                    <h2 class=" text-xl font-bold hover:text-amber-400 ">
                        <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[0]->slug])}}"> {{$categories[0]->name}}</a>
                    </h2>
                    <div class="mt-4">
                        @if($categories[0]->children)
                            @foreach($categories[0]->children as $child)
                                <a href="{{route('shop.product_slug',[...$query,'slug'=>$child->slug])}}" class="hover:text-amber-400 block mb-2" >
                                    <i class="fa-solid fa-circle text-green-400 text-[7px]"></i>
                                    {{$child->name}}
                                </a>
                            @endforeach
                        @endif
                    </div>
                    <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[0]->slug])}}">
                        <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full hover:bg-amber-400 ">
                            Mua ngay
                        </button>
                    </a>
                </div>
            </div>
            <div class=" w-full h-full  col-span-9">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper">
                        @php
                            $allProduct = $categories[0]->product;
                            if ($categories[0]->children) {
                                foreach ($categories[0] -> children as $cate_child){
                                    $cate_product = $cate_child->product;
                                    $allProduct = $allProduct->concat($cate_product);
                                    if (count($allProduct) > 12){
                                               $products = $allProduct->take(12);
                                          }else{
                                              $products = $allProduct ;
                                          }
                                }
                            }
                         @endphp
                        @foreach($products->chunk(2) as $chunk)
                        <div class="swiper-slide w-1/6 border rounded-lg py-2">
                            @foreach($chunk as $product)
                            <div class="grid group/item z-10 mt-3 relative">
                                <div class=" relative overflow-hidden z-20 h-64">
                                    @php
                                        $image = $product->images ;
                                        $image = Arr::flatten($image);
                                        $image ? $image_path =  json_decode($image[0]->path) : $image_path = 'images/web/product/default-image.jpg';
                                    @endphp
                                    <a href="{{route('shop.product_detail',[$product->slug])}}" class="flex justify-center">
                                        <img src="{{asset($image_path[0])}}" class="p-1 h-60 transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 "
                                             alt="{{$product->name}}" title="{{$product->name}}">
                                    </a>
                                    <div class=" absolute -bottom-10 left-14 transition-all ease-in duration-200 group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
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
                                </div>
                                @if($product->discount_persent)
                                    <div class="z-30 absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-xl font-normal px-3 ">
                                        <span class="text-white text-xs line-clamp-1"> -{{ $product->discount_persent}}% </span>
                                    </div>
                                @endif
                                <div class=" z-30 bg-white group/item  ">
                                    <a href="{{route('shop.product_detail',[...$query,'slug'=>$product->slug])}}" class="flex justify-center hover:text-amber-400">
                                        <p class="whitespace-nowrap text-ellipsis overflow-hidden text-center text-[15px] w-48" title="{{$product->name}} {{$product->barcode}} "> {{$product->name}}  {{$product->barcode}} </p>
                                    </a>
                                    <div class="flex gap-4 justify-center items-center text-[15px]">
                                        <span class="text-[#fe0000] font-bold "> {{number_format($product->price*(1-$product->discount_persent/100),0,'.','.') }} ₫</span>
                                        @if($product->discount_persent)
                                            <span class="text-gray-400 text-sm line-through"> {{number_format($product->price,0,'.','.')}} ₫</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev border w-8 h-8 focus:text-xs rounded-full button_navigation "> </div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            @endif
        </div>
        {{--     Block product 2--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-12 ">
            @if(isset($categories[1]) )
                <div class=" w-full h-full  col-span-9">
                    <div class="swiper mySwiper w-full h-full ">
                        <div class="swiper-wrapper ">
                            @php
                                $allProduct = $categories[1]->product;
                                if ($categories[1]->children) {
                                    foreach ($categories[1] -> children as $cate_child){
                                        $cate_product = $cate_child->product;
                                        $allProduct = $allProduct->concat($cate_product);
                                          if (count($allProduct) > 12){
                                               $products = $allProduct->take(12);
                                          }else{
                                              $products = $allProduct ;
                                          }
                                    }
                                }
                            @endphp
                            @foreach($products->chunk(2) as $chunk)
                                <div class="swiper-slide  w-1/6 border rounded-lg py-2">
                                    @foreach($chunk as $product)
                                        <div class="grid group/item z-10 mt-3  relative ">
                                            <div class=" relative overflow-hidden z-20  h-64">
                                                    @php
                                                        $image = $product->images ;
                                                        $image = Arr::flatten($image);
                                                        $image ? $image_path =  json_decode($image[0]->path) : $image_path = 'images/web/product/default-image.jpg';
                                                    @endphp
                                                <a href="{{route('shop.product_detail',['slug' => $product->slug])}}" class="flex justify-center ">
                                                    <img src="{{asset($image_path[0])}}" class="p-1 h-60  py-7
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="{{$product->name}}" title="{{$product->name}}">
                                                </a>
                                                <div class=" absolute -bottom-10 left-14  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                                    <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
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
                                                            <i class="fa-solid fa-cart-shopping"> </i>
                                                        </button>
                                                    @endguest
                                                </div>
                                            </div>
                                            @if($product->discount_persent)
                                                <div class="z-30 absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-xl font-normal px-3 ">
                                                    <span class="text-white text-xs line-clamp-1"> -{{ $product->discount_persent}}% </span>
                                                </div>
                                            @endif
                                            <div class=" z-30 bg-white group/item  ">
                                                <a href="{{route('shop.product_detail',[...$query,'slug'=>$product->slug])}}" class="flex justify-center hover:text-amber-400">
                                                    <p class="whitespace-nowrap text-ellipsis overflow-hidden text-center text-[15px] w-48"  title="{{$product->name}} Mã {{$product->barcode}} " > {{$product->name}} Mã {{$product->barcode}}</p>
                                                </a>
                                                <div class="flex gap-4 justify-center items-center text-[15px]">
                                                    <span class="text-[#fe0000] font-bold "> {{number_format($product->price*(1-$product->discount_persent/100),0,'.','.') }} ₫</span>
                                                    @if($product->discount_persent)
                                                        <span class="text-gray-400 text-sm line-through"> {{number_format($product->price,0,'.','.')}} ₫</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev border w-8 h-8 focus:text-xs rounded-full button_navigation "  style="font-size: 5px !important;"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div style="background-image:url('{{asset($categories[1]->icon_path)}}');" class=" rounded-3xl col-span-3 bg-cover  bg-center w-full h-[100%]">
                    @php $query = [] @endphp
                    <div class="p-8 " >
                        <h2 class=" text-xl font-bold hover:text-amber-400 ">
                            <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[1]->slug])}}"> {{$categories[1]->name}}</a>
                        </h2>
                        <div class="mt-4">
                            @if($categories[1]->children)
                                @foreach($categories[1]->children as $child)
                                    <a href="{{route('shop.product_slug',[...$query,'slug'=>$child->slug])}}" class="hover:text-amber-400 block mb-2" >
                                        <i class="fa-solid fa-circle text-green-400 text-[7px]"></i> {{$child->name}}</a>
                                @endforeach
                            @endif
                        </div>
                        <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[1]->slug])}}">
                            <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full  hover:bg-amber-400 ">
                                Mua ngay
                            </button>
                        </a>
                    </div>
                </div>

            @endif
        </div>
        {{--     Block product 3--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-12">
            @if(isset($categories[2]))
                <div style="background-image:url('{{asset($categories[2]->icon_path)}}');" class=" rounded-3xl col-span-3 bg-cover  bg-center w-full h-[100%]">
                    @php $query = [] @endphp
                    <div class="p-8 " >
                        <h2 class=" text-xl font-bold hover:text-amber-400 ">
                            <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[2]->slug])}}"> {{$categories[2]->name}}</a>
                        </h2>
                        <div class="mt-4">
                            @if($categories[2]->children)
                                @foreach($categories[2]->children as $child)
                                    <a href="{{route('shop.product_slug',[...$query,'slug'=>$child->slug])}}" class="hover:text-amber-400 block mb-2" >
                                        <i class="fa-solid fa-circle text-green-400 text-[7px]"></i> {{$child->name}}</a>
                                @endforeach
                            @endif
                        </div>
                        <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[2]->slug])}}">
                            <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full  hover:bg-amber-400 ">
                                Mua ngay
                            </button>
                        </a>
                    </div>
                </div>
                <div class=" w-full h-full  col-span-9">
                    <div class="swiper mySwiper w-full h-full ">
                        <div class="swiper-wrapper  ">
                            @php
                                $allProduct = $categories[2]->product;
                                if ($categories[2]->children) {
                                    foreach ($categories[2] -> children as $cate_child){
                                        $cate_product = $cate_child->product;
                                        $allProduct = $allProduct->concat($cate_product);
                                          if (count($allProduct) > 12){
                                               $products = $allProduct->take(12);
                                          }else{
                                              $products = $allProduct ;
                                          }
                                    }
                                }
                            @endphp
                            @foreach($products->chunk(2) as $chunk)
                                <div class="swiper-slide  w-1/6 border rounded-lg py-2">
                                    @foreach($chunk as $product)
                                        <div class="grid group/item z-10 mt-3  relative ">
                                            <div class=" relative overflow-hidden z-20  h-64">
                                                @php
                                                    $image = $product->images ;
                                                    $image = Arr::flatten($image);
                                                    $image ? $image_path =  json_decode($image[0]->path) : $image_path = 'images/web/product/default-image.jpg';
                                                @endphp
                                                <a href="{{route('shop.product_detail',['slug' => $product->slug])}}" class="flex justify-center">
                                                    <img src="{{asset($image_path[0])}}" class="p-1 h-60 py-7
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="{{$product->name}}" title="{{$product->name}}">
                                                </a>
                                                <div class=" absolute -bottom-10 left-14  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                                    <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
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
                                                    @endguest                                                </div>
                                            </div>
                                            @if($product->discount_persent)
                                                <div class="z-30 absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-xl font-normal px-3 ">
                                                    <span class="text-white text-xs line-clamp-1"> -{{ $product->discount_persent}}% </span>
                                                </div>
                                            @endif
                                            <div class=" z-30 bg-white group/item  ">
                                                <a href="{{route('shop.product_detail',[...$query,'slug'=>$product->slug])}}" class="flex justify-center hover:text-amber-400">
                                                    <p class="whitespace-nowrap text-ellipsis overflow-hidden text-center text-[15px] w-48"  title="{{$product->name}} {{$product->barcode}}" > {{$product->name}} {{$product->barcode}}</p>
                                                </a>
                                                <div class="flex gap-4 justify-center items-center text-[15px]">
                                                    <span class="text-[#fe0000] font-bold "> {{number_format($product->price*(1-$product->discount_persent/100),0,'.','.') }} ₫</span>
                                                    @if($product->discount_persent)
                                                        <span class="text-gray-400 text-sm line-through"> {{number_format($product->price,0,'.','.')}} ₫</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev border w-8 h-8 focus:text-xs rounded-full button_navigation "  style="font-size: 5px !important;"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            @endif
        </div>
        {{--    Block product 4--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-12 ">
            @if(isset($categories[1]) )
                <div class=" w-full h-full  col-span-9">
                    <div class="swiper mySwiper w-full h-full ">
                        <div class="swiper-wrapper ">
                            @php
                                $allProduct = $categories[3]->product;
                                if ($categories[3]->children) {
                                    foreach ($categories[3] -> children as $cate_child){
                                        $cate_product = $cate_child->product;
                                        $allProduct = $allProduct->concat($cate_product);
                                          if (count($allProduct) > 12){
                                               $products = $allProduct->take(12);
                                          }else{
                                              $products = $allProduct ;
                                          }
                                    }
                                }
                            @endphp
                            @foreach($products->chunk(2) as $chunk)
                                <div class="swiper-slide  w-1/6 border rounded-lg py-2">
                                    @foreach($chunk as $product)
                                        <div class="grid group/item z-10 mt-3  relative ">
                                            <div class=" relative overflow-hidden z-20  h-64">
                                                @php
                                                    $image = $product->images ;
                                                    $image = Arr::flatten($image);
                                                    $image ? $image_path =  json_decode($image[0]->path) : $image_path = 'images/web/product/default-image.jpg';
                                                @endphp
                                                <a href="{{route('shop.product_detail',['slug' => $product->slug])}}" class="flex justify-center ">
                                                    <img src="{{asset($image_path[0])}}" class="p-1 h-60  py-7
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="{{$product->name}}" title="{{$product->name}}">
                                                </a>
                                                <div class=" absolute -bottom-10 left-14 transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                                    <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
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
                                                            <i class="fa-solid fa-cart-shopping"> </i>
                                                        </button>
                                                    @endguest
                                                </div>
                                            </div>
                                            @if($product->discount_persent)
                                                <div class="z-30 absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-xl font-normal px-3 ">
                                                    <span class="text-white text-xs line-clamp-1"> -{{ $product->discount_persent}}% </span>
                                                </div>
                                            @endif
                                            <div class=" z-30 bg-white group/item  ">
                                                <a href="{{route('shop.product_detail',[...$query,'slug'=>$product->slug])}}" class="flex justify-center hover:text-amber-400">
                                                    <p class="whitespace-nowrap text-ellipsis overflow-hidden text-center text-[15px] w-48"  title="{{$product->name}} Mã {{$product->barcode}} " > {{$product->name}} Mã {{$product->barcode}}</p>
                                                </a>
                                                <div class="flex gap-4 justify-center items-center text-[15px]">
                                                    <span class="text-[#fe0000] font-bold "> {{number_format($product->price*(1-$product->discount_persent/100),0,'.','.') }} ₫</span>
                                                    @if($product->discount_persent)
                                                        <span class="text-gray-400 text-sm line-through"> {{number_format($product->price,0,'.','.')}} ₫</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev border w-8 h-8 focus:text-xs rounded-full button_navigation "  style="font-size: 5px !important;"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div style="background-image:url('{{asset($categories[1]->icon_path)}}');" class=" rounded-3xl col-span-3 bg-cover bg-center w-full h-[100%]">
                    @php $query = [] @endphp
                    <div class="p-8 " >
                        <h2 class=" text-xl font-bold hover:text-amber-400 ">
                            <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[3]->slug])}}"> {{$categories[3]->name}}</a>
                        </h2>
                        <div class="mt-4">
                            @if($categories[3]->children)
                                @foreach($categories[3]->children as $child)
                                    <a href="{{route('shop.product_slug',[...$query,'slug'=>$child->slug])}}" class="hover:text-amber-400 block mb-2" >
                                        <i class="fa-solid fa-circle text-green-400 text-[7px]"></i> {{$child->name}}</a>
                                @endforeach
                            @endif
                        </div>
                        <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[1]->slug])}}">
                            <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full  hover:bg-amber-400 ">
                                Mua ngay
                            </button>
                        </a>
                    </div>
                </div>

            @endif
        </div>
        {{--    Block product 5--}}
        <div class="w-full h-full grid grid-cols-12 gap-6 mt-12">
            @if(isset($categories[4]))
                <div style="background-image:url('{{asset($categories[4]->icon_path)}}');" class=" rounded-3xl col-span-3 bg-cover  bg-center w-full h-[100%]">
                    @php $query = [] @endphp
                    <div class="p-8 " >
                        <h2 class=" text-xl font-bold hover:text-amber-400  ">
                            <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[4]->slug])}}"> {{$categories[4]->name}}</a>
                        </h2>
                        <div class="mt-4">
                            @if($categories[4]->children)
                                @foreach($categories[4]->children as $child)
                                    <a href="{{route('shop.product_slug',[...$query,'slug'=>$child->slug])}}" class="hover:text-amber-400 block mb-2" >
                                        <i class="fa-solid fa-circle text-green-400 text-[7px]"></i> {{$child->name}}
                                    </a>
                                @endforeach
                            @endif
                        </div>
                        <a href="{{route('shop.product_slug',[...$query,'slug'=>$categories[4]->slug])}}">
                            <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full  hover:bg-amber-400 ">
                                Mua ngay
                            </button>
                        </a>
                    </div>
                </div>
                <div class=" w-full h-full  col-span-9">
                    <div class="swiper mySwiper w-full h-full ">
                        <div class="swiper-wrapper  ">
                            @php
                                $allProduct = $categories[4]->product;
                                if ($categories[4]->children) {
                                    foreach ($categories[4] -> children as $cate_child){
                                        $cate_product = $cate_child->product;
                                        $allProduct = $allProduct->concat($cate_product);
                                          if (count($allProduct) > 12){
                                               $products = $allProduct->take(12);
                                          }else{
                                              $products = $allProduct ;
                                          }
                                    }
                                }
                            @endphp
                            @foreach($products->chunk(2) as $chunk)
                                <div class="swiper-slide  w-1/6 border rounded-lg py-2">
                                    @foreach($chunk as $product)
                                        <div class="grid group/item z-10 mt-3  relative ">
                                            <div class=" relative overflow-hidden z-20  h-64">
                                                @php
                                                    $image = $product->images ;
                                                    $image = Arr::flatten($image);
                                                    $image ? $image_path =  json_decode($image[0]->path) : $image_path = 'images/web/product/default-image.jpg';
                                                @endphp
                                                <a href="{{route('shop.product_detail',[...$query,'slug' => $product->slug])}}" class="flex justify-center">
                                                    <img src="{{asset($image_path[0])}}" class="p-1 h-60
                                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 "
                                                         alt="{{$product->name}}" title="{{$product->name}}">
                                                </a>
                                                <div class=" absolute -bottom-10 left-14 transition-all ease-in duration-200  group-hover/item:bottom-2
                                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                                    <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
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
                                                    @endguest                                                </div>
                                            </div>
                                            @if($product->discount_persent)
                                                <div class="z-30 absolute top-0 left-0 bg-red-600 rounded-tl-lg rounded-br-xl font-normal px-3 ">
                                                    <span class="text-white text-xs line-clamp-1"> -{{ $product->discount_persent}}% </span>
                                                </div>
                                            @endif
                                            <div class=" z-30 bg-white group/item  ">
                                                <a href="{{route('shop.product_detail',[...$query,'slug'=>$product->slug])}}" class="flex justify-center hover:text-amber-400">
                                                    <p class="whitespace-nowrap text-ellipsis overflow-hidden text-center text-[15px] w-48"  title="{{$product->name}} {{$product->barcode}} " > {{$product->name}} {{$product->barcode}}</p>
                                                </a>
                                                <div class="flex gap-4 justify-center items-center text-[15px]">
                                                    <span class="text-[#fe0000] font-bold "> {{number_format($product->price*(1-$product->discount_persent/100),0,'.','.') }} ₫</span>
                                                    @if($product->discount_persent)
                                                        <span class="text-gray-400 text-sm line-through"> {{number_format($product->price,0,'.','.')}} ₫</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev border w-8 h-8 focus:text-xs rounded-full button_navigation "  style="font-size: 5px !important;"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            @endif
        </div>
        {{--    Block adress shop--}}
        <div class="w-full  mt-12 ">
            <div class="grid grid-cols-5 w-full  gap-4">
                @foreach($shops as $shop)
                    <div class="col-span-1 w-full flex justify-center py-3 px-6 bg-cover bg-center  rounded-3xl shadow hover:drop-shadow-lg  hover:shadow-gray-400 " style=" background-image:url('{{asset('images/web/background/background-address.webp')}}')  ">
                        <div class=" text-center">
                            <h3 class="font-bold text-green-400 text-2xl"> {{$shop->name}}</h3>
                            <div class="mt-8">
                                <p>{{$shop->address}}</p>
                                <p>{{$shop->phone}}</p>
                            </div>
                            <div class="mt-2">
                                <a href="{{$shop->google_map}}" class=" decoration-1 underline font-bold"> Đi đến cửa hàng</a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        {{--    Blog news--}}
        <div class="w-full h-full mt-16 mb-24">
            <div class="" >
                <div class="">
                    <h2 class="text-4xl font-bold flex justify-center"> Tin Tức </h2>
                    <div class="flex justify-center ">
                        <img src="{{asset('images/bg-title-after.webp')}}" alt="" class="w-12 h-5">
                    </div>
                    <div class="grid grid-cols-4 gap-5 w-full mt-3">
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-kem-hoa-3-trieu.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả có hoa</a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-dam-tang-2-trieu-500k.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả cưới NYC</a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-kem-hoa-800.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả 800k </a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-ha-la-500.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả 500k </a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
       let swiper = new Swiper('.mySwiper', {
            slidesPerView: 4,
            spaceBetween: 20,
            roundLengths:true,
            grabCursor:true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection
