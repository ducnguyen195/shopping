<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Shop Fruit - Thanh toán hóa đơn </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://esgoo.net/scripts/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon-fruit.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="px-36">
        <form action="{{route('shop.is_payment')}}" method="POST">
            @csrf
            <div class="grid grid-cols-3  w-full h-full ">
                <div class="col-span-2 w-full h-full p-7 ">
                    <div class="flex justify-center ">
                        <a href="{{route('shop.index')}}">
                            <img src="{{asset('images/logo.png')}}" alt="" width="90" height="90">
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 mt-3">
                        <div class="col-span-1 mt-5">
                            <h3 class="font-medium text-lg"> Thông tin nhận đơn hàng</h3>
                            <div>
                                <div class="mt-3 ">
                                    <label for="email" > </label>
                                    <input type="email" id="email" name="email" class="w-full border-gray-300 rounded outline-green-500 " placeholder="Email (tùy chọn)" required>
                                </div>
                                <div class=" mt-3">
                                    <label for="name" > </label>
                                    <input type="text" id="name" name="name" class="w-full rounded border-gray-300 outline-green-500 " placeholder="Họ và tên" required>
                                </div>
                                <div class=" mt-3">
                                    <label for="phone" > </label>
                                    <input type="tel" id="phone" name="phone" class="w-full rounded border-gray-300 outline-green-500 " placeholder="Số điện thoại" required>
                                </div>
                                <div class="mt-3">
                                    <select class="w-full rounded py-2 px-3 border-gray-300" id="tinh" name="tinh" title="Chọn Tỉnh Thành" required>
                                        <option value="0"> Tỉnh Thành</option>
                                    </select>
                                </div>
                                <div class=" mt-3">
                                    <select class="w-full rounded py-2 px-3 border-gray-300" id="quan" name="quan" title="Chọn Quận Huyện" required>
                                        <option value="0"> Quận Huyện</option>
                                    </select>
                                </div>
                                <div class="mt-3 ">
                                    <select class="w-full rounded py-2 px-3 border-gray-300" id="phuong" name="phuong" title="Chọn Phường Xã" required>
                                        <option value="0"> Phường Xã</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="note"></label>
                                    <textarea name="note" id="note" class="rounded  border-gray-300 pl-3  w-full " placeholder="Ghi chú (tùy chọn)"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 mt-5">
                            <div>
                                <h3 class="font-medium text-lg"> Vận chuyển </h3>
                                <div class=" relative border border-gray-300 w-full mt-3 rounded py-4 flex items-center">
                                    <label for="transport" class="block absolute  left-12 w-full items-center text-sm font-medium text-gray-600 ">
                                        <span> Giao Hàng Tận Nơi </span>
                                        <span class="ml-32"> 30.000₫ </span>
                                    </label>
                                    <input type="radio" id="transport" name="transport" class=" ml-3 p-2 bg-black " value="30000" checked >
                                </div>
                            </div>
                            <div class="mt-8">
                                <h3 class="font-medium text-lg"> Thanh toán </h3>
                                <div class=" relative border border-gray-300 w-full mt-3 rounded py-4 flex items-center" >
                                    <label for="payment_COD" class="grid grid-cols-5 absolute left-10 w-full items-center text-sm font-medium text-gray-600 ">
                                        <span class="col-span-4"> Thanh toán khi giao hàng  </span>
                                        <span class="text-lg col-span-1 "> <i class="fa-regular fa-money-bill-1"></i> </span>
                                    </label>
                                    <input type="radio" id="payment_COD" name="payments" class=" ml-3 p-2 focus:ring-0 outline-none" value="COD" required>
                                </div>
                                <div class=" relative border border-gray-300 w-full mt-3 rounded py-4 flex items-center" >
                                    <label for="payment_VNPay" class="grid grid-cols-5 absolute  left-10 w-full items-center text-sm font-medium text-gray-600 " >
                                        <span class="col-span-4"> Thanh toán trực tuyến VNPay </span>
                                        <span class=" text-lg "> <i class="fa-regular fa-money-bill-1"></i> </span>
                                    </label>
                                    <input type="radio" id="payment_VNPay" name="payments" class=" ml-3 p-2 focus:ring-0 outline-none" value="VNPay" required>
                                </div>
                                <div class=" relative border border-gray-300 w-full mt-3 rounded py-4 flex items-center" >
                                    <label for="payment_MoMo" class="grid grid-cols-5 absolute  left-10 w-full  items-center text-sm font-medium text-gray-600" >
                                        <span class="col-span-4"> Thanh toán trực tuyến MoMo </span>
                                        <span class=" text-lg block"> <i class="fa-regular fa-money-bill-1"></i> </span>
                                    </label>
                                    <input type="radio" id="payment_MoMo" name="payments" class=" ml-3 p-2 focus:ring-0 outline-none" value="MoMo" required>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-full border-t col-span-2 mt-8 ">
                            <ul class="flex float-end gap-3 text-sm font-medium text-gray-600 mt-4 ">
                                <li class="cursor-pointer"> Chính sách hoàn trả</li>
                                <li class="cursor-pointer"> Chính sách bảo mật</li>
                                <li class="cursor-pointer"> Điều khoản sử dụng</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full h-full border-l-2 border-gray-200 ">
                    <div class=" flex items-center py-4 border-b  mr-4">
                        <h2 class="font-medium text-lg pl-8"> Đơn hàng ({{  $cartTotalQuantity }} sản phẩm)</h2>
                    </div>
                   <div class="pl-8 pr-1">
                       <div class="relative overflow-y-auto overflow-hidden max-h-64 w-full py-4">
                           <div class="w-full text- text-left rtl:text-right   ">
                               <div class="">
                                   @foreach($cartProduct as $item)
                                   <div class=" pt-2 grid grid-cols-6" >
                                       <div class="col-span-1">
                                           <div class="w-[50px] h-[50px] border rounded-lg relative ">
                                               <div class=" flex items-center text-center">
                                                   <img src=" {{asset($item->attributes->image)}}" alt=""   class="rounded-lg w-full mt-2">
                                               </div>
                                               <span class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-black text-white text-center text-xs font-medium">
                                                   {{$item->quantity}}
                                               </span>
                                           </div>
                                       </div>
                                       <div class="col-span-4">
                                           <span class="text-black text-sm font-sans ">
                                               {{$item->name}} {{$item->attributes->barcode}}
                                                <p class="text-red-600 text-xs"> </p>
                                           </span>
                                       </div>
                                       <div class="justify-end flex mt-1.5">
                                            <span class="text-gray-600 text-sm  flex ">
                                                {{number_format($item->price,0,'.','.')}}
                                                <p class="text-xs"> ₫</p>
                                            </span>
                                       </div>
                                   </div>
                                   @endforeach
                               </div>
                           </div>
                       </div>
                       <div class=" border-t border-gray-200">
                           <div class="py-4 flex justify-between gap-1">
                               <input type="text" class="rounded w-4/6 l h-11 border-gray-300" placeholder="Nhập mã giảm giá">
                               <button class="bg-gray-500 text-white py-2.5 px-5 rounded font-mono ">
                                   Áp dụng
                               </button>
                           </div>
                       </div>
                       <div class="py-4 border-t border-gray-300">
                           <ul class="text-gray-500">
                               <li class="flex justify-between font-sans ">
                                   <p >Tạm tính </p>
                                   <span class=" flex"> {{number_format($subTotal,0,'.','.')}}
                                    <p class="text-xs mt-0.5"> ₫</p>
                                   </span>
                               </li>
                               <li class="flex justify-between pt-3">
                                   <p> Phí vận chuyển </p>
                                   <span class="flex">
                                       30.000
                                       <p class="text-xs mt-0.5"> ₫</p>
                                   </span>
                               </li>
                           </ul>
                       </div>
                       <div class="flex justify-between font-medium  border-t  border-gray-300 py-4">
                           <p class="text-gray-500 "> Tổng cộng </p>
                           <span class="flex text-xl font-medium" > {{number_format(($subTotal + 30000),0,'.','.')}}
                              <p class="text-[13px] "> ₫ </p>
                           </span>
                       </div>
                       <div class="flex justify-between items-center">
                           <a href="{{route('shop.cart_index')}}">
                               <span class="text-sm font-medium text-gray-700">
                                   <i class="fa-solid fa-angle-left"></i>
                                   Quay về giỏ hàng
                               </span>
                           </a>
                           <button type="submit" name="redirect" class="py-3 px-5 bg-black text-white rounded"> ĐẶT HÀNG </button>
                       </div>
                   </div>
                </div>
            </div>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
    $(document).ready(function() {
        //Lấy tỉnh thành
        $.getJSON('https://esgoo.net/api-tinhthanh/1/0.htm',function(data_tinh){
            if(data_tinh.error == 0){
                $.each(data_tinh.data, function (key_tinh,val_tinh) {
                    $("#tinh").append('<option value="'+val_tinh.id+'">'+val_tinh.full_name+'</option>');
                });
                $("#tinh").change(function(e){
                    var idtinh=$(this).val();
                    //Lấy quận huyện
                    $.getJSON('https://esgoo.net/api-tinhthanh/2/'+idtinh+'.htm',function(data_quan){
                        if(data_quan.error==0){
                            $("#quan").html('<option value="0">Quận Huyện</option>');
                            $("#phuong").html('<option value="0">Phường Xã</option>');
                            $.each(data_quan.data, function (key_quan,val_quan) {
                                $("#quan").append('<option value="'+val_quan.id+'">'+val_quan.full_name+'</option>');
                            });
                            //Lấy phường xã
                            $("#quan").change(function(e){
                                var idquan=$(this).val();
                                $.getJSON('https://esgoo.net/api-tinhthanh/3/'+idquan+'.htm',function(data_phuong){
                                    if(data_phuong.error==0){
                                        $("#phuong").html('<option value="0">Phường Xã</option>');
                                        $.each(data_phuong.data, function (key_phuong,val_phuong) {
                                            $("#phuong").append('<option value="'+val_phuong.id+'">'+val_phuong.full_name+'</option>');
                                        });
                                    }
                                });
                            });
                        }
                    });
                });
            }
        });
    });

    function cart(){

    }
</script>
</body>
</html>
