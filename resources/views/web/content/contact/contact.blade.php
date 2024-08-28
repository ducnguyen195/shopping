@extends('layouts.shoppingLayoutWeb')
@section('title','Liên hệ | Shoponline.th')
@section('content')
    <div class="w-full h-full">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Liên hệ</h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ</a> /  <strong>  Liên hệ </strong> </span>
                </span>
            </div>
        </div>
        <div class="px-32 mt-16 mb-24">
            <div class="">
                <div class="contact-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.218052295667!2d105.8042514152679!3d21.06395148597932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aae74d040b51%3A0xe45f068b9c898081!2zOTUgWHXDom4gTGEsIFTDonkgSOG7kywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1636444884710!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-7 mt-8">
                <div class="col-span-4 mb-2">
                    <h3 class="font-bold text-xl"> Thông tin liên hệ </h3>
                    <p class="my-3 text-gray-500 leading-7"> Hệ thống trái cây nhập khẩu, đặc biệt trái cây xách tay trực tiếp từ Mỹ, Úc, Nhật, Hàn Quốc, Newzealand, Đài Loan...như Cherry, Nho sữa, giỏ trái cây và đầy đủ các mặt hàng trái cây nhập khẩu đáp ứng mọi yêu cầu khác hàng. Chất lượng chuẩn 100%, giá cả phải chăng</p>
                    <div class="my-2">
                        @foreach($shops as $shop)
                            <p class="text-gray-500 mb-3">
                                <strong class="text-black"> Địa chỉ {{$loop->index + 1}} : </strong>
                                {{$shop}}
                            </p>
                        @endforeach
                        <p class=" text-gray-500 mb-3">
                            <strong class="text-black"> Hotline : </strong>
                            0379866333
                        </p>
                        <p class=" text-gray-500 ">
                            <strong class="text-black"> Email : </strong>
                            test@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-span-8 w-full">
                    <div class="w-full">
                        <form action="" class="w-full">
                            <div class=" flex gap-5 w-full mb-3" >
                                <div class="w-1/2">
                                   <label for="feedback_name" class="font-medium block mb-2">
                                       Họ và tên
                                       <span class="text-red-600"> *</span>
                                   </label>
                                   <input id="feedback_name" type="text" class="bg-gray-100 border-none w-full rounded-lg focus:ring-0" placeholder=" Nhập họ và tên ">
                                </div>
                                <div class="w-1/2">
                                    <label for="feedback_mail" class="font-medium block mb-2">
                                        Email
                                        <span class="text-red-600"> * </span>
                                    </label>
                                    <input id="feedback_mail" type="text"  class="bg-gray-100 border-none w-full rounded-lg focus:ring-0" placeholder=" Nhập địa chỉ Email " >
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="feedback_phone" class="font-medium  block mb-2">
                                    Điện thoại
                                    <span class="text-red-600"> * </span>
                                </label>
                                <input type="text" id="feedback_phone" class="bg-gray-100 border-none w-full rounded-lg focus:ring-0" placeholder=" Nhập số điện thoại " data-validation-error-msg="Không được để trống" required >
                            </div>
                            <div class="mb-3">
                                <label for="feedback_content" class="font-medium  block mb-2">
                                    Nội dung
                                    <span class="text-red-600"> * </span>
                                </label>
                                <textarea id="feedback_content" class="bg-gray-100 border-none w-full h-28 rounded-lg focus:ring-0" placeholder=" Nội dung liên hệ " ></textarea>
                            </div>
                            <button class="py-4 px-7 bg-black text-white rounded-xl hover:bg-green-500"> GỬI TIN NHẮN </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
