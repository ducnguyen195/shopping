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
                <h2 class="text-xl font-sans"> Giỏ hàng
                    <span class="text-sm"> ({{$cartTotalQuantity}} sản phẩm)</span>
                </h2>
                <div class="mt-7">
                    @if(session('success'))
                        <div class=" font-bold  text-xl text-green-400 my-32 ">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div>
                        <form action="">
                           <div>
                               @foreach($itemsContent as $product)
                               <div class="grid grid-cols-12 gap-6 py-5 border items-center">
                                   <div class="col-span-2 w-full ">
                                       <img src="{{asset($product->attributes->image)}}"  class="w-full h-full" alt="">
                                   </div>
                                  <div class="col-span-10 grid grid-cols-12  ">
                                      <div class="col-span-5">
                                          <span class="font-bold text-sm hover:text-amber-400"> {{$product->name}}</span>
                                          <span class="text-xs text-gray-400  flex gap-2 mt-1.5">
                                               Thương hiệu :
                                               <p> Đang cập nhật </p>
                                           </span>
                                          <a href="#" class="text-green-400 text-xs mt-2"> Xóa </a>
                                      </div>
                                      <div class=" float-left col-span-5">
                                          <span class="text-[#fe0000] font-bold "> {{number_format($product->price,0,'.','.')}}₫ </span>
                                      </div>
                                      <div class=" float-right col-span-2 ">
                                          <div class=" flex p-0">
                                              <button onclick="handlePriceMinus ({{$product->id}})" class="py-1.5 px-2 border border-gray-200 text-gray-500 text-xs m-0  hover:text-green-400  "
                                                      type="button"> <i class="fa-solid fa-minus "></i>
                                              </button>
                                              <input id="input_quantity-${productCart[i].id}" onchange="handleUpdate()" type="text" class="p-0.5 w-9 h-8 text-black border-gray-200 text-sm text-center font-medium " value="{{$product->quantity}}" >
                                              <button onclick="handlePricePlus({{$product->id}})" class="py-1.5 px-2 border border-gray-200 text-gray-500 text-xs  hover:text-green-400"
                                                      type="button"> <i class="fa-solid fa-plus"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                               </div>
                               @endforeach
                           </div>
                            <div class="grid grid-cols-12 justify-between mt-4">
                                <div class="col-span-5">
                                    <a href="{{route('shop.list_product')}}" class="hover:text-amber-400 font-bold "> Tiếp tục mua hàng </a>
                                </div>
                               <div class="col-span-7 justify-end ">
                                  <div class=" text-sm flex justify-between ">
                                      <p> Tạm tính :</p>
                                      <p class="font-bold text-sm"> {{number_format($subTotal,0,'.','.')}}₫</p>
                                  </div>
                                  <div class=" flex justify-between">
                                      <p class="mt-2"> Thành tiền :</p>
                                      <p class="mt-2 font-bold text-xl text-[#fe0000]"> {{number_format($subTotal,0,'.','.')}}₫</p>
                                  </div>
                                   <button class="p-4 bg-black text-white rounded-lg font-bold float-right mt-4" >
                                       <a href="{{route('shop.payment')}}">
                                           THANH TOÁN NGAY
                                       </a>
                                   </button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
