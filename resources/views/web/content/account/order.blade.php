@extends('layouts.shoppingLayoutWeb')
@section('content')
    <div class="w-full h-full mb-32">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Trang đơn hàng </h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ  </a>  / Trang tài khoản /  <strong>  Trang khách hàng </strong> </span>
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
                    <li class="hover:text-green-500">
                        <a href="{{route('shop.account')}}"> Thông tin tài khoản </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500 text-green-400">
                        <a href=""> Đơn hàng của bạn </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500">
                        <a href=""> Đổi mật khẩu </a>
                    </li>
                    <li class="mt-2.5 hover:text-green-500">
                        <a href=""> Sổ địa chỉ </a>
                    </li>
                </ul>
            </div>
            <div class="col-span-9">
                <h4 class="text-lg"> ĐƠN HÀNG CỦA BẠN </h4>
                <div class="relative overflow-x-auto shadow-md  sm:rounded-lg mt-8">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Đơn hàng
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ngày
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Địa chỉ
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Giá trị đơn hàng
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TT thanh toán
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TT vận chuyển
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
