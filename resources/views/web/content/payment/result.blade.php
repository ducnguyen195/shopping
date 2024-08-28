@extends('layouts.shoppingLayoutWeb')
@section('title','Giỏ hàng | Shoponline.th')
@section('content')
    <div class="w-full h-full mb-40 ">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Giỏ hàng</h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ</a> /  <strong>  Giỏ hàng </strong> </span>
                </span>
            </div>
        </div>
        <div class="px-32 mt-14">
            <div class="px-32">
                <div>
                    <span class="text-lg"> {{$notification}} . <a href="{{route('shop.order')}}" class="text-blue-600 text-sm text-decoration-line-through"> Tới.. </a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
