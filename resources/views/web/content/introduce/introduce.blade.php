@extends('layouts.shoppingLayoutWeb')
@section('title','Trái cây Nhập khẩu , Trái cây Xách tay')
@section('content')
    <div class="w-full h-full">
        <div style="background-image: url('{{asset('images/bg-breadcrumb.webp')}}')" class=" w-full h-[200px] bg-cover flex items-center justify-center">
            <div class=" block text-center">
                <h2 class="font-bold text-2xl"> Trái cây Nhập khẩu , Trái cây Xách tay</h2>
                <span class="block mt-5 text-sm">
                    <span> <a href="{{route('shop.index')}}" class="hover:text-amber-400"> Trang chủ</a> /  <strong>  Trái cây Nhập khẩu , Trái cây Xách tay </strong> </span>
                </span>
            </div>
        </div>
        <div class="px-32 mt-8 mb-96">
            <h1 class="font-medium text-lg text-gray-800"> Trái cây Nhập khẩu , Trái cây Xách tay</h1>
            <p class="text-sm mt-2">Chúng tôi chuyên cung cấp trái cây nhập khẩu, trái cây xách tay nổi tiếng các nước trên thế giới như: Mỹ, Nhật, Úc, Newzealand, Hàn Quốc,...nhận đóng giỏ trái cây, giò quà tặng, hàng đi biếu, Cam kết đảm bảo chất lượng, ngon và rõ nguồn gốc xuất xứ. Một địa chỉ tin cậy hàng đầu cho khách hàng lựa chọn tại khu vực Hà Nội.</p>
        </div>
    </div>
@endsection
