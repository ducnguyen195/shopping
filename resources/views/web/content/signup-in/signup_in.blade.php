@extends('layouts.shoppingLayoutWeb')
@section('content')
    <div  class="w-full  flex justify-center  ">
       <div class="w-full ">
           <div  style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}');" class=" w-full h-[200px] bg-cover flex justify-center items-center" >
               <div>
                   <h3 class="font-bold text-xl"> ĐĂNG NHẬP TÀI KHOẢN</h3>
                   <span>Trang chủ/ <b> Đăng nhập tài khoản</b></span>
               </div>
           </div>
           <div class=" w-full flex justify-center mt-5 relative  ">
               <div class="w-2/5   ">
                   <div class="border border-gray-300 flex justify-around w-full font-normal ">
                       <a href="#" class=" p-2 w-full flex justify-center border-r border-gray-300  "> <p class=""> ĐĂNG NHẬP</p></a>
                       <a href="#" class="p-2 w-full  flex justify-center "> ĐĂNG KÝ</a>
                   </div>
                   <form action="" class="p-5 w-full  border-gray-300 border">
                       <div class=" w-full">
                           <label for="email" class=" font-bold"> EMAIL</label> <br>
                           <input type="email"  class="w-full focus:ring-0 border-gray-300 mt-1" name="email" id="email" placeholder="Nhập địa chỉ Email .">
                       </div>
                       <div class="w-full mt-5">
                           <label for="password" class="font-bold"> MẬT KHẨU</label> <br>
                           <input type="password" class="w-full focus:ring-0 border-gray-300 mt-1" id="password" name="password" placeholder="Nhập mật khẩu .">
                       </div>
                       <div class="mt-3">
                           <a href="#" class="text-green-400"> Quên mật khẩu ?</a>
                       </div>
                       <button type="submit" class=" w-full flex justify-center bg-blue-500 text-white p-2 font-bold mt-3" > ĐĂNG NHẬP</button>
                   </form>
               </div>
               <div class="absolute top-80 text-black text-xs border rounded-full py-1 px-2 bg-gray-200 ">  hoặc Đăng nhập qua</div>
           </div>
           <div class=" flex justify-center text-white  ">
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
