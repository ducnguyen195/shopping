@extends('layouts.shoppingLayoutWeb')
@section('title', 'Chi tiết sản phẩm')
@section('content')
    <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
        <div class=" block text-center">
            <h2 class="font-bold text-2xl"> Tất cả sản phẩm</h2>
            <span class="block mt-5 text-sm">
                    <span> Trang chủ  /  <strong>  {{$product[0]->category->name}}  </strong> /   {{$product[0]->name}} @if($product[0]->barcode) {{$product[0]->barcode}}  @endif   </span>
                </span>
        </div>
    </div>
    <div class="px-32 w-full h-full">
        <div class="w-full h-full">
            <div class="grid grid-cols-12  w-full h-full gap-5 mt-8">
                <div class="col-span-5 w-full">
                    <div class="grid grid-cols-5 gap-8 w-full h-full relative ">
                        <div thumbsSlider=""  class="swiper mySwiper w-full col-span-1 ">
                            <div class="swiper-wrapper">
                                @foreach($product[0]->images as $image)
                                    @php $image_path = json_decode($image->path) @endphp
                                    @foreach($image_path as $path)
                                        <div class="swiper-slide border rounded-lg border-green-400 p-1 ">
                                            <img src="{{asset($path)}}" alt="" class="w-full h-full" >
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper mySwiper2 col-span-4 w-4/5 ">
                            <div class="swiper-wrapper  ">
                                @foreach($product[0]->images as $image)
                                    @php $image_path = json_decode($image->path) @endphp
                                    @foreach($image_path as $path)
                                        <div class="swiper-slide  ">
                                            <img src="{{asset($path)}}" alt="" class="w-full h-full" >
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        <button class="rounded-full bg-[#fe0000] z-30 w-10 h-10 text-white text-lg hover:bg-amber-400 absolute top-0 right-0"
                                title="Thêm vào yêu thích">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                        <script>
                            let swiper = new Swiper(".mySwiper", {
                                loop: true,
                                direction: "vertical",
                                spaceBetween: 10,
                                slidesPerView: 4,
                                freeMode: true,
                                watchSlidesProgress: false,
                            });
                            let swiper2 = new Swiper(".mySwiper2", {
                                loop: true,
                                spaceBetween: 10,
                                thumbs: {
                                    swiper: swiper,
                                },
                            });
                        </script>
                    </div>
                </div>
                <div class="col-span-4 ">
                    <div class="font-normal">
                        <h1 class="text-xl font-medium"> {{$product[0]->name}} {{$product[0]->barcode}}</h1>
                        <div>
                        <span class="text-xs">
                            SKU :
                            <strong>( Đang cập nhật ...)</strong>
                        </span>
                        </div>
                        <div class="mt-2">
                        <span class="flex items-end gap-3">
                             <strong class="text-[#fe0000] text-2xl">{{ number_format($product[0]->price*(1-$product[0]->discount_persent*0.01), 0, ',', '.') }} ₫</strong>
                            @if($product[0] -> discount_persent > 0)
                                <span class="line-through text-gray-400 font-normal"> {{number_format($product[0]->price,0,'.','.')}}₫</span>
                            @endif
                        </span>
                        @if($product[0] -> discount_persent > 0 )
                            <span class="font-normal text-sm">
                                Tiết kiệm :
                                <strong class="">{{number_format($product[0]->price * $product[0] -> discount_persent * 0.01, 0, '.', '.')}}₫</strong>
                            </span>
                        @endif
                            <div>
                                {!! $product[0]->description !!}
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="input_quantity" class="font-medium"> Số lượng :</label>
                            <form action="#" class="mt-1 " >
                                <div class="flex items-center gap-2">
                                    <div class="rounded-full  border border-gray-300 px-2 ">
                                        <button type="button" class="hover:text-green-500 text-[13px] " onclick="handlePriceMinus()"> <i class="fa-solid fa-minus"></i> </button>
                                        <input type="text" id="input_quantity" class="border-none outline-none p-1 focus:ring-0 w-14 text-center text-lg" value="1" min="1">
                                        <button type="button" class="hover:text-green-500  text-[13px] " onclick="handlePricePlus()" > <i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <div class=" text-center flex justify-center rounded-full  bg-[#fe0000] py-2 px-3 hover:bg-blue-600">
                                        <button type="button" class="text-white font-bold "> MUA NGAY</button>
                                    </div>
                                </div>
                                <div class="bg-green-500 hover:bg-blue-600 rounded-full py-2.5 px-4 w-1/2 text-center mt-3">
                                    <button  onclick="handleAddProductDetail({{$product[0]->id}})" class="text-white font-bold "> THÊM VÀO GIỎ HÀNG </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 border border-green-400 rounded-lg p-3 flex justify-center text-center w-full">
                    <div class=" flex-wrap ">
                        <div class=" ">
                            <div class="icon flex justify-center">
                                <img src="//bizweb.dktcdn.net/100/065/538/themes/838571/assets/service_1.png?1708919610274" alt="100% tự nhiên" class="img-responsive">
                            </div>
                            <div class="info mt-2">
                                100% tự nhiên
                            </div>
                        </div>
                        <div class="item mt-4 ">
                            <div class="icon flex justify-center">
                                <img src="//bizweb.dktcdn.net/100/065/538/themes/838571/assets/service_2.png?1708919610274" alt="Chứng nhận ATTP" class="img-responsive">
                            </div>
                            <div class="info mt-2 ">
                                Chứng nhận ATTP
                            </div>
                        </div>
                        <div class="item mt-4 ">
                            <div class="icon flex justify-center">
                                <img src="//bizweb.dktcdn.net/100/065/538/themes/838571/assets/service_3.png?1708919610274" alt="Luôn luôn tươi mới" class="img-responsive">
                            </div>
                            <div class="info mt-2">
                                Luôn luôn tươi mới
                            </div>
                        </div>
                        <div class="item mt-4">
                            <div class="icon  flex justify-center">
                                <img src="//bizweb.dktcdn.net/100/065/538/themes/838571/assets/service_4.png?1708919610274" alt="An toàn cho sức khoẻ" class="img-responsive">
                            </div>
                            <div class="info mt-2">
                                An toàn cho sức khoẻ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class=" flex justify-center">
                <p class=" text-white  bg-amber-400 rounded-t-xl p-2"> THÔNG TIN SẢN PHẨM</p>
            </div>
            <div class="p-2 border">
                <div class="font-normal">
                    @if($product[0]->post[0]->content == '' )
                        <div class="rounded border border-green-300 bg-green-200 py-5 px-3 col-span-4">
                            <p class=" text-green-500"> Nội dung đang được cập nhật.</p>
                        </div>
                    @else
                        {!! $product[0]->post[0]->content !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="mt-7">
            <div class="">
               <div class="text-center">
                   <h2 class="text-3xl font-bold"> Sản phẩm liên quan</h2>
                   <span class="flex justify-center"> <img src="{{asset('images/bg-title-after.webp')}}" alt=""></span>
               </div>
                <div class="swiper mySwiper9">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid group/item z-10 rounded-lg border">
                                <div class=" relative overflow-hidden z-20 w-full h-64">
                                    <div class="w-full h-64">

                                    </div>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center ml-4 gap-2">
                                        <button class="rounded-full bg-[#fe0000] w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"
                                                onclick="handleAddProduct()">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item my-2 rounded-b-lg ">
                                    <a href="" class="flex justify-center  ">
                                        <p class="whitespace-nowrap overflow-hidden text-center text-ellipsis text-[15px] font-normal w-44 " title="" >  </p>
                                    </a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    let swiper9 = new Swiper(".mySwiper9", {
                        slidesPerView: 5,
                        spaceBetween: 30,
                        grabCursor: true,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
        </div>
    </div>
        <div class="mt-7">
            <div class="">
                <div class="text-center">
                    <h2 class="text-3xl font-bold"> Sản phẩm đã xem</h2>
                    <span class="flex justify-center"> <img src="{{asset('images/bg-title-after.webp')}}" alt=""></span>
                </div>
                <div class="swiper mySwiper69">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid group/item z-10 rounded-lg border">
                                <div class=" relative overflow-hidden z-20 w-full h-64">
                                    <div class="w-full h-64">

                                    </div>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center ml-4 gap-2">
                                        <button class="rounded-full bg-[#fe0000] w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"
                                                onclick="handleAddProduct()">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item my-2 rounded-b-lg ">
                                    <a href="" class="flex justify-center  ">
                                        <p class="whitespace-nowrap overflow-hidden text-center text-ellipsis text-[15px] font-normal w-44 " title="" >  </p>
                                    </a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    let swiper69 = new Swiper(".mySwiper69", {
                        slidesPerView: 5,
                        spaceBetween: 30,
                        grabCursor: true,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
            </div>
        </div>
    <script>
        function handlePriceMinus () {
            let quantity = document.getElementById('input_quantity');
            let quantityCurrent = parseInt(quantity.value);
            if (quantityCurrent > 1){
                    quantity.value = quantityCurrent - 1;
            }
        }

        function handlePricePlus() {
            let quantity = document.getElementById('input_quantity');
            let quantityCurrent = parseInt(quantity.value);
            quantity.value = quantityCurrent + 1;
        }

        function handleAddProductDetail(id) {
            let quantity = document.getElementById('input_quantity');
            let quantityCurrent = parseInt(quantity.value);
            console.log(quantityCurrent);
            $.ajax({
                url: '{{route('shop.store_product')}}',
                type:'POST',
                data:{
                    _token:'{{csrf_token()}}',
                    id: id,
                    quantity : quantityCurrent,
                },
                success: function (response){
                    if (response){
                        showSuccessToast();
                    }
                },
                error: function (error){
                    console.log(error);
                }
            })
        }

    </script>
@endsection
