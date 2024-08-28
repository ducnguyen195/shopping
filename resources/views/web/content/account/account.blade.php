@extends('layouts.shoppingLayoutWeb')
@section('content')
    <div class="w-full h-full mb-32">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Trang khách hàng </h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ  </a>  /  <strong>  Trang khách hàng </strong> </span>
                </span>
            </div>
        </div>
        <div class=" grid grid-cols-12 mx-32 mt-16">
            <div class="col-span-3 ">
                <div>
                    <h4 class="text-lg "> TRANG TÀI KHOẢN </h4>
                    <p class="font-bold text-sm mt-1.5 ">
                        Xin chào ,
                        <span > {{Auth::user()->name}} </span>
                        !
                    </p>
                </div>
                <ul class="mt-6 text-sm">
                    <li class="hover:text-green-500 text-green-400 ">
                        <a href=" "> Thông tin tài khoản </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500  ">
                        <a href="{{route('shop.order')}}"> Đơn hàng của bạn </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500">
                        <a href=""> Đổi mật khẩu </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500">
                        <a href=""> Sổ địa chỉ </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500">
                        <a href=""> Đăng xuất</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-9">
                <h4 class="text-lg"> THÔNG TIN TÀI KHOẢN </h4>
                <p class="mt-6">
                   <strong class="text-sm ">  Họ tên : </strong>
                     {{Auth::user()->name}}
                </p>
                <p class="mt-2">
                    <strong class="text-sm"> Email : </strong>
                    {{Auth::user()->email}}
                </p>
            </div>
        </div>
    </div>
@endsection
