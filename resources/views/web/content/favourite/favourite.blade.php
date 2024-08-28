@extends('layouts.shoppingLayoutWeb')
@section("title" ,'Yêu thích | Shoponline.th')
@section('content')
    <div class="w-full h-full">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Yêu thích </h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ </a> /  <strong>  Yêu thích </strong> </span>
                </span>
            </div>
        </div>
        <div class="px-32 mt-8 pb-20">
            <h2 class="font-medium text-lg text-gray-700 flex justify-center"> Danh sách yêu thích của tôi</h2>
            <div class="grid grid-cols-4 gap-4 mt-8 ">
                <div class="col-span-1">
                    <div class="px-5">
                        <a href="">
                            <img src="{{asset('images/web/post/4.webp')}}" alt="">
                        </a>
                    </div>
                    <div class="mt-2">
                        <p class="text-green-600 font-bold"> Tuesday, 16 July, 2024</p>
                    </div>
                    <div class="mt-2">
                        <h3 class="font-bold"> Giỏ Dạm Ngõ Và Cháp Ăn Hỏi</h3>
                    </div>
                    <div class="mt-2 text-sm">
                        <p class="overflow-hidden text-ellipsis whitespace-normal "> Giỏ dạm ngõ và cháp ăn hỏi là một phần quan trọng trong nghi lễ đám cưới ở tất cả các vùng miền của nước ta. Đứng ở góc độ nhà gái thì mặ...</p>
                    </div>
                </div>

        </div>
    </div>
@endsection
