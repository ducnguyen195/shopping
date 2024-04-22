@extends('layouts.shoppingLayoutWeb')
@section('content')
    <div  class="w-full h-full">
        <div class="bg-[url('../images/bg-breadcrumb.webp')] w-full h-100 bg-cover bg-no-repeat flex justify-center items-center" >
            <div>
                <h3 class="font-bold text-xl"> ĐĂNG NHẬP TÀI KHOẢN</h3>
                <span>Trang chủ/ <b> Đăng nhập tài khoản</b></span>
            </div>
        </div>
        <div class="mt-5 w-full h-full flex self-center">
           <div class="w-full ">
               <div class="border border-gray-300 flex justify-around w-2/5 font-normal ">
                   <h3 class=" p-2 w-full flex justify-center border-r border-gray-300  "> ĐĂNG NHẬP</h3>
                   <h3 class="p-2 w-full  flex justify-center "> ĐĂNG KÝ</h3>
               </div>
               <form action="" class="p-5 w-2/5  border-gray-300 border">
                   <div class=" w-full">
                       <label for="email" class="mb-2 font-bold"> EMAIL</label> <br>
                       <input type="email"  class="w-full focus:ring-0 border-gray-300" name="email" id="email" placeholder="Nhập địa chỉ Email .">
                   </div>
                   <div class="w-full">
                       <label for="password" class="font-bold"> MẬT KHẨU</label> <br>
                       <input type="password" class="w-full focus:ring-0 border-gray-300" id="password" name="password" placeholder="Nhập mật khẩu .">
                   </div>
                   <div>
                       <a href="#" class="text-green-400"> Quên mật khẩu ?</a>
                   </div>
                   <button type="submit" class=" w-full flex justify-center bg-blue-400 text-white p-2 font-bold" > ĐĂNG NHẬP</button>
               </form>
           </div>
        </div>
    </div>
@endsection
