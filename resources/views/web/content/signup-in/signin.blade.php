@extends('layouts.shoppingLayoutWeb')
@section("title" ,'Đăng nhập tài khoản | Shoponline.th')
@section('content')
    <div  class="w-full  flex justify-center mb-32 ">
       <div class="w-full ">
           <div  style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}');" class=" w-full h-[200px] bg-cover flex justify-center items-center" >
               <div>
                   <h3 class="font-bold text-xl"> ĐĂNG NHẬP TÀI KHOẢN</h3>
                   <span class=" block mt-3 text-sm">Trang chủ /  <b>   Đăng nhập tài khoản</b></span>
               </div>
           </div>
           <div class=" w-full flex justify-center mt-10 relative  ">
               <div class="w-2/5   ">
                   <div class="border border-gray-300 flex justify-around w-full font-normal h-12 ">
                       <a href="{{route('shop.login_form')}}" class=" relative font-medium  w-full flex justify-center items-center border-r border-gray-300 ">
                           ĐĂNG NHẬP
                           <p class="absolute left-3 right-3 bg-green-400 h-0.5 -bottom-0.5 "></p>
                       </a>
                       <a href="{{route('shop.register_form')}}" class=" w-full flex justify-center items-center text-gray-400 hover:text-amber-400 "> ĐĂNG KÝ</a>
                   </div>
                   <form action="{{route('shop.login')}}" method="POST" class="p-5 w-full  border-gray-300 border">
                       @csrf
                       <div class=" w-full">
                           <label for="email" class=" font-medium text-[15px]"> EMAIL <span class="text-red-600"> *</span> </label> <br>
                           <input type="email"  class="w-full bg-gray-100 focus:ring-0 border-gray-200 mt-1" name="email" id="email" placeholder="Nhập địa chỉ Email ." required>
                       </div>
                       <div class="w-full mt-5">
                           <label for="password" class="font-medium text-[15px]"> MẬT KHẨU <span class="text-red-600"> *</span> </label> <br>
                           <input type="password" class="w-full bg-gray-100 focus:ring-0 border-gray-200 mt-1" id="password" name="password" placeholder="Nhập mật khẩu ." required>
                       </div>
                       <div class="mt-3">
                           <a href="#" class="text-green-400 text-xs"> Quên mật khẩu ? </a>
                       </div>
                       <button type="submit" class=" w-full flex justify-center bg-blue-500 text-white p-2 font-bold mt-3 hover:bg-green-500" > ĐĂNG NHẬP</button>
                       <p class=" text-xs text-center text-gray-500 mt-4 mb-5"> Halafruit.vn cam kết bảo mật và sẽ không bao giờ đăng <br>
                           hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn.</p>
                   </form>
               </div>
           </div>
           <div class="relative flex justify-center text-white  ">
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
