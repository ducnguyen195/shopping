@extends('layouts.shoppingLayoutWeb')
@section("title" ,'Đăng ký tài khoản | Shoponline.th')
@section('content')
    <div  class="w-full  flex justify-center mb-32 ">
       <div class="w-full ">
           <div  style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}');" class=" w-full h-[200px] bg-cover flex justify-center items-center" >
               <div>
                   <h3 class="font-bold text-xl"> ĐĂNG KÝ TÀI KHOẢN</h3>
                   <span class=" block mt-3 text-sm">Trang chủ /   <b> Đăng ký tài khoản</b> </span>
               </div>
           </div>
           <div class=" w-full flex justify-center mt-10 relative  ">
               <div class="w-2/5   ">
                   <div class="border border-gray-300 flex justify-around w-full font-normal h-12 ">
                       <a href="{{route('shop.login_form')}}" class=" w-full flex justify-center items-center text-gray-400 hover:text-amber-400 border-r border-gray-300 "> ĐĂNG NHẬP</a>
                       <a href="{{route('shop.register_form')}}" class=" relative font-medium  w-full flex justify-center items-center  ">
                           ĐĂNG KÝ
                           <p class="absolute left-3 right-3 bg-green-400 h-0.5 -bottom-0.5 "></p>
                       </a>

                   </div>
                   <form action="{{route('shop.register')}}" method="POST" class="p-5 w-full  border-gray-200 border">
                       @csrf
                       <div class=" w-full">
                           <label for="name" class=" font-medium text-[15px]"> HỌ VÀ TÊN </label> <br>
                           <input type="text"  class="w-full bg-gray-100 focus:ring-0 border-gray-200 mt-1" name="name" id="name" placeholder="Nhập họ và tên ..">
                       </div>
                       <div class=" w-full mt-5">
                           <label for="phone" class=" font-medium text-[15px]"> SỐ ĐIỆN THOẠI </label> <br>
                           <input type="tel"  class="w-full bg-gray-100 focus:ring-0 border-gray-200 mt-1" name="phone" id="phone" placeholder="Nhập số điện thoai ..." required>
                       </div>
                       <div class=" w-full mt-5">
                           <label for="email" class=" font-medium text-[15px]"> EMAIL </label> <br>
                           <input type="email"  class="w-full bg-gray-100 focus:ring-0 border-gray-200 mt-1" name="email" id="email" placeholder="Nhập địa chỉ Email .." required>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                       </div>
                       <div class="w-full mt-5">
                           <label for="password" class="font-medium text-[15px]"> MẬT KHẨU </label> <br>
                           <input type="password" class="w-full bg-gray-100 focus:ring-0 border-gray-200 mt-1" id="password" name="password" placeholder="Nhập mật khẩu .." required>
                       </div>

                       <button type="submit" class=" w-full flex justify-center bg-blue-500 text-white p-2 font-bold mt-3 hover:bg-green-500" > TẠO TÀI KHOẢN</button>
                   </form>
               </div>
           </div>
           <div class=" flex justify-center text-white relative ">
               <div class="absolute -top-3 text-black text-xs border rounded-full py-1 px-2 bg-gray-200 ">  hoặc Đăng nhập qua</div>

               <div class="border w-2/5 flex justify-center gap-8 p-7">
                  <button class="border p-2 bg-blue-700">
                      <i class="fa-brands fa-facebook-f border-r px-3"></i>
                      Facebook
                  </button>
                  <button class="border p-2 bg-red-600 ">
                      <i class="fa-brands fa-google-plus-g border-r px-3"></i>
                      Google
                  </button>
              </div>
           </div>
       </div>
    </div>

@endsection
