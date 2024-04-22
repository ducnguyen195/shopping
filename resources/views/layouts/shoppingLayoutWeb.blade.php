<!DOCTYPE html>
<html lang="en">
<head>
    <title>SHOP FRUIT</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon-fruit.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-full h-full">
        {{--HEARDER--}}
   <div class="w-full relative ">
       <div class="bg-[#3ba66b] w-ful h-full flex justify-around py-2 ">
           <div class="flex self-center">
               <ul class="text-white text-sm font-bold flex  gap-6 ">
                   <li class="hover:text-amber-400">
                       <a href=""> Trang Chủ</a>
                   </li>
                   <li class="hover:text-amber-400 relative ">
                       <a href=""> Sản Phẩm </a>
                       <i class="fa-solid fa-caret-down"></i>
                       <ul class=" hidden absolute top-8 left-0 w-60 bg-white text-black  font-normal  border ">
                           <li class="border-b w-full p-2 flex items-center justify-between relative">
                               <a href=""> Trái cây nhập khẩu</a>
                               <i class="fa-solid fa-caret-right"></i>
                               <ul class=" hidden absolute top-0 left-60 bg-white w-full border  ">
                                   <li class="border-b w-full p-2 flex items-center justify-between">
                                       <a href=""> Táo</a>
                                   </li>
                                   <li class="border-b w-full p-2 flex items-center justify-between">
                                       <a href=""> Nho</a>
                                   </li>
                                   <li class="border-b w-full p-2 flex items-center justify-between">
                                       <a href=""> Hồng treo gió</a>
                                   </li>
                               </ul>
                           </li>
                           <li  class="border-b w-full p-2 flex items-center justify-between">
                               <a href=""> Giỏ trái cây 300k - 650k </a>
                               <i class="fa-solid fa-caret-right"></i>
                           </li>
                           <li  class="border-b w-full p-2 flex items-center justify-between">
                               <a href=""> Giỏ trái cây 700k - 900k </a>
                               <i class="fa-solid fa-caret-right"></i>
                           </li>
                           <li  class="border-b w-full p-2 flex items-center justify-between">
                               <a href=""> Giỏ trái cây trên 900k </a>
                               <i class="fa-solid fa-caret-right"></i>
                           </li>
                           <li  class="border-b w-full p-2 flex items-center justify-between">
                               <a href=""> Trái cây sấy , hạt dinh dưỡng </a>
                               <i class="fa-solid fa-caret-right"></i>
                           </li>
                       </ul>
                   </li>
                   <li class="hover:text-amber-400">
                       <a href=""> Giới Thiệu </a>
                   </li>
                   <li class="hover:text-amber-400">
                       <a href=""> Blog </a>
                   </li>
                   <li class="hover:text-amber-400">
                       <a href=""> Liên Hệ </a>
                   </li>
               </ul>
           </div>
           <div class="">
               <img src="{{asset('images/logo.png')}}" alt="" width="100" height="100">
           </div>
           <div class="flex self-center gap-9 items-center ">
               <div >
                   <form action="" class="relative  ">
                       <input type="text" class="rounded-full p-3 outline-none" placeholder="Bạn cần tìm gì ?">
                       <span class="absolute right-0 top-0 rounded-full w-1/4 h-full bg-amber-400 text-white text-xl flex items-center justify-center ">
                           <i class="fa-solid fa-magnifying-glass  "></i>
                       </span>
                   </form>
               </div>
               <div>
                   <div class="text-white text-2xl relative">
                       <a href="">
                           <i class="fa-solid fa-heart"> </i>
                       </a>
                       <div class="absolute top-0 left-7 text-xs w-4 h-4 bg-amber-400 rounded-full flex justify-center">
                            <p class="">1</p>
                       </div>
                   </div>
               </div>
               <div>
                   <div class="text-white text-2xl relative">
                       <a href="">
                           <i class="fa-solid fa-bag-shopping"> </i>
                       </a>
                       <div class="absolute top-0 left-6 text-xs w-4 h-4 bg-amber-400 rounded-full flex justify-center">
                           <p class="">1</p>
                       </div>
                   </div>
               </div>
               <div>
                   <div class="text-white text-2xl " >
                       <a href="">
                           <i class="fa-solid fa-circle-user"> </i>
                       </a>
                   </div>
               </div>
           </div>
       </div>
       <div class="z-50  absolute left-0">
           <img src="{{asset('images/bg-header.png')}}" alt="">
       </div>
   </div>
        {{--  END HEADER--}}
    <div id="container" class="w-full h-full ">
        @yield('content')
    </div>
    {{--    FOOTER  --}}
    <div class="w-full h-full  ">
        <div class="" >
            <img src="{{asset('images/bg-footer.png')}}" alt="">
        </div>
        {{--   FOOTER 1  --}}
        <div class="bg-[#3ba66b] font-normal text-white  text-center ">
            <div class="w-full px-32 py-2 grid grid-cols-3 gap-6 items-center ">
                {{--     Block 1  --}}
                <div class=" flex-none self-center  ">
                    <div class=" " >
                        <div>
                            <h3 class="font-bold"> ĐĂNG KÝ NHẬN THÔNG TIN </h3>
                            <p>Đăng ký nhận bản tin để nhận ưu đãi đặc biệt về sản phẩm</p>
                        </div>
                        <div  class="  flex justify-center pt-3">
                            <form action="" class="flex relative " >
                                <label for="input-introduction"></label>
                                <input type="tel" id="input-introduction" class="text-black rounded-full p-2 outline-none  ">
                                <div class=" h-full p-1 w-1/3 absolute top-0 right-0 bg-amber-300 rounded-r-full font-bold text-sm flex items-center" >
                                    <button class=""> Đăng Ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5">
                        <ul>
                            <li>
                                <a href=""> Chính sách thanh toán </a>
                            </li>
                            <li>
                                <a href=""> Chính sách bảo mật </a>
                            </li>
                            <li>
                                <a href=""> Chính sách vận chuyển</a>
                            </li>
                            <li>
                                <a href=""> Chính sách đổi trả</a>
                            </li>
                            <li>
                                <a href=""> Chính sách kiểm hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{--      Block 2  --}}
                <div class="">
                    <div class="flex justify-center mb-3">
                        <img src="{{asset('images/logo.png')}}" alt="" width="100" height="100">
                    </div>
                    <div>
                       <p> Hệ thống trái cây nhập khẩu, đặc biệt trái cây xách tay trực tiếp từ Mỹ, Úc, Nhật, Hàn Quốc,
                           Newzealand, Đài Loan...như Cherry, Nho sữa, giỏ trái cây và đầy đủ các mặt hàng trái cây
                           nhập khẩu đáp ứng mọi yêu cầu khác hàng. Chất lượng chuẩn 100%, giá cả phải chăng</p>
                        <br>
                        <b class="pt-3">
                            Bán hàng chất lượng, uy tín, giá cả hợp lý
                        </b>
                    </div>
                    <a href="" class="flex justify-center">
                        <img src="{{asset('images/logo-bct.png')}}" alt="" width="170">
                    </a>
                </div>
                {{--      Block 3  --}}
                <div>
                    <h3 class="font-bold"> LIÊN HỆ VỚI CHÚNG TÔI </h3>
                    <div>
                        <p>Hộ kinh doanh: Trái cây nhập khẩu</p>
                        <p>MST 01B8011843 Do UBND quận Tây Hồ cấp ngày 14/03/2017</p>
                    </div>
                    <div>
                        <ul>
                            <li class="flex justify-center">
                                <b>Địa chỉ 1 :</b>
                                <p> Số 95 Xuân La - Tây Hồ - Hà Nội </p>
                            </li>
                            <li class="flex  justify-center">
                                <b>Địa chỉ 2 :</b>
                                <p> Số 97 Đào Tấn - Ba Đình - Hà Nội </p>
                            </li>
                            <li  class="flex  justify-center">
                                <b>Địa chỉ 3 :</b>
                                <p> Số 24B7 Phạm Ngọc Thạch - Đống Đa - HN </p>
                            </li>
                            <li class="flex  justify-center">
                                <b>Địa chỉ 4 :</b>
                                <p>20 Tràng Thi- Hàng Trống- Hoàn Kiếm HN </p>
                            </li>
                            <li class="flex  justify-center">
                                <b>Hotline :</b>
                                <p>  0379866333 </p>
                            </li>
                            <li class="flex  justify-center">
                                <b>Email :</b>
                                <p>  test@gmail.com </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--     FOOTER 2  --}}
            <div class="flex justify-between  border-t px-32  p-3 ">
                <div>
                    <p>@ Bản quyền thuộc về Nóc</p>
                </div>
                <div class=" flex gap-4">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
