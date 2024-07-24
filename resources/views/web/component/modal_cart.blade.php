<div id="cart_body" class="relative z-50 hidden"  role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity" data-modal-hide="cart_body"></div>

        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex w-96 ">
                <div class="pointer-events-auto w-screen max-w-md">
                    <div class="flex h-full flex-col bg-white shadow-xl px-4 py-6 sm:px-6">
                        <div class="flex items-start justify-between">
                            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">GIỎ HÀNG</h2>
                            <div class="ml-3 flex h-7 items-center">
                                <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500" data-modal-hide="cart_body">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Close panel</span>
                                    <svg class="h-6 w-6 hover:rotate-180 ease-in-out " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex-1 overflow-y-auto  py-6 ">
                            <div class="mt-5">
                                <div class="flow-root">
                                    <ul role="list"  id="cartContent" class="-my-6 divide-y divide-gray-200">
{{--                                        @foreach($item as $product)--}}
{{--                                            <li class="flex py-6">--}}
{{--                                                @php $image_path  = $product->images  @endphp--}}
{{--                                                <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">--}}
{{--                                                    <img src="" alt="" class="h-full w-full object-cover object-center">--}}
{{--                                                </div>--}}
{{--                                                <div class="ml-4 flex flex-col text-black ">--}}
{{--                                                    <a href="" class="text-xs hover:text-amber-400 font-medium "> {{$product->name}} </a>--}}
{{--                                                    <div class="flex mt-3 ">--}}
{{--                                                        <div class="font-normal text-sm">--}}
{{--                                                            <label for="input_quantity" class=" text-xs">Số lượng : </label>--}}
{{--                                                            <div class=" flex p-0">--}}
{{--                                                                <button class="w-7 h-7 border border-gray-300 text-gray-500 text-xs m-0 p-0 " type="button"> <i class="fa-solid fa-minus"></i></button>--}}
{{--                                                                <input id="input_quantity" type="text" class="p-0.5 w-7 h-7 text-black border-gray-300 text-sm text-center font-medium " value="{{$product->quantity}}" >--}}
{{--                                                                <button class="w-7 h-7 border border-gray-300 text-gray-500 text-xs" type="button"> <i class="fa-solid fa-plus"></i></button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class=" text-sm ml-5">--}}
{{--                                                            <p class="text-red-500 font-bold">{{number_format($product->price,0,'.','.')}}₫</p>--}}
{{--                                                            <div class="flex mt-3">--}}
{{--                                                                <a  href="" class="text-xs text-green-600">Bỏ sản phẩm</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Tổng tiền : </p>
                                <p class="text-red-500" id="total_price"> </p>
                            </div>
                            <div class="mt-6">
                                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">
                                    Thanh Toán
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>


    $('#view-cart').click(function() {
        $.ajax({
            url: '{{ route('shop.cart_product') }}',
            type: 'GET',
            data:'json',
            success: function(response) {
               renderCart(response);
            },
            error: function( error) {
                console.log(error);
            }
        });
    });

    function handleUpdate() {
        $.ajax({
           url: ''
        });
    }

    function handleRemove(id) {
        $.ajax({
           url:"{{route('shop.destroy_product')}}",
           type:'POST',
           data:{
               _token: "{{csrf_token()}}",
               id: id
           } ,
            success: function(response) {
               renderCart(response);
            },
            error: function( error) {
                console.log(error);
            }
        });
    }

    function renderCart(response) {
        let total = response.subTotal;
        let product = response.items;
        let productCart = Object.values(product);
        console.log(productCart)
        let html = '';
        if(productCart.length > 0) {
            for(let i = 0; i < productCart.length ; i++ ){
                html += `
                             <li class="flex py-6">
                                <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <img src="${productCart[i].attributes.image}" alt="" class="h-full w-full object-cover object-center">
                                </div>
                                <div class="ml-4 flex flex-col text-black ">
                                    <a href="" class="text-xs hover:text-amber-400 font-medium "> ${productCart[i].name}</a>
                                    <div class="flex mt-3 ">
                                        <div class="font-normal text-sm">
                                            <label for="input_quantity" class=" text-xs">Số lượng : </label>
                                            <div class=" flex p-0">
                                                <button onclick="handlePriceMinus ()" class="w-7 h-7 border border-gray-300 text-gray-500 text-xs m-0 p-0 " type="button"> <i class="fa-solid fa-minus"></i></button>
                                                <input id="input_quantity-${productCart[i].id}" type="text" class="p-0.5 w-7 h-7 text-black border-gray-300 text-sm text-center font-medium " value="${productCart[i].quantity}" >
                                                <button onclick="handlePricePlus()" class="w-7 h-7 border border-gray-300 text-gray-500 text-xs" type="button"> <i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class=" text-sm ml-5">
                                            <p class="text-red-500 font-bold">${productCart[i].price.toLocaleString('es-ES')}₫</p>
                                            <div class="flex mt-3">
                                                <a  href="#" onclick="handleRemove(${productCart[i].id})" class="text-xs text-green-600">Bỏ sản phẩm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            `
            }
        } else {
            html = `
                             <div class="flex justify-center items-center self-center h-full mt-32">
                                <a href="">
                                    <button class="p-3 bg-green-400 text-while text-sm"> Tiếp tục mua sắm </button>
                                </a>
                             </div>
                          `
        }
        $('#cartContent').html(html);
        $('#total_price').text(total.toLocaleString('es-ES') + '₫');
    }
</script>
