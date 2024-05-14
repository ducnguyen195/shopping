@extends('layouts.shoppingLayoutWeb')
@section('content')
    <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative w-full h-full overflow-hidden  md:h-96 z-20">
            <!-- Item 1 -->
            <div class=" hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('images/slider_2.webp')}} "  class="absolute block w-full h-[100%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover bg-center" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('images/slider_1.webp')}}" class="absolute block w-full h-[100%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('images/slider_3.webp')}}" class="absolute block w-full h-[100%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
    <div class="px-32 mt-14 w-full h-full ">
        <div class="">
            <div class="grid grid-cols-4 gap-6 font-semibold ">
                <div class="p-3 rounded-lg shadow-lg">
                    <div class="p-3  ">
                        <a href=""  class="hover:pt-10" > <img class="rounded transition-all ease-in-out  hover:translate-y-0.5  " src="{{asset('images/img_store_1.webp')}}" alt=""></a>
                        <a href="" class=""> <h4 class="pt-4 flex justify-center"> Hala Fruit 24B7 Phạm Ngọc Thạch</h4> </a>
                    </div>
                </div>
                <div class="p-3 rounded-lg shadow-lg">
                    <div class="p-3 ">
                        <a href="" class="hover:pt-4"> <img class="rounded hover:translate-y-0.5 hover:transition-y " src="{{asset('images/img_store_2.webp')}}" alt=""></a>
                        <a href=""> <h4 class="pt-3 flex justify-center"> Hala Fruit 97 Đào Tấn</h4> </a>
                    </div>
                </div>
                <div class="p-3 rounded-lg shadow-lg">
                    <div class="p-3">
                        <a href="" class=""> <img class="rounded " src="{{asset('images/img_store_3.webp')}}" alt=""></a>
                        <a href=""> <h4 class="pt-3 flex justify-center"> Hala Fruit 95 Xuân La</h4> </a>
                    </div>
                </div>
                <div class="p-3 rounded-lg shadow-lg">
                    <div class="p-3">
                        <a href=""> <img class="rounded" src="{{asset('images/img_store_4.webp')}}" alt=""></a>
                        <a href=""> <h4 class="pt-3 flex justify-center"> Hala Fruit 45 Chùa Láng</h4> </a>
                    </div>
                </div>
                <div class="p-3 rounded-lg shadow-lg hidden">
                    <div class="p-3">
                        <a href=""> <img class="rounded" src="{{asset('images/img_store_5.webp')}}" alt=""></a>
                        <a href=""> <h4 class="pt-3 flex justify-center"> Hala Fruit 20 Tràng Thi</h4> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-2 border-red-500 rounded-lg mt-20 ">
            <div class="flex justify-center  relative ">
               <h2 class="absolute -bottom-9  w-72 p-2 h-20 rounded-full shadow-2xl bg-white flex items-center justify-center ">
                   <a href="" class="flex font-bold text-2xl text-gray-500  ">
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 511.548 511.548" style=" enable-background:new 0 0 511.548 511.548;" xml:space="preserve" width="32" height="32"> <g>
                               <path style="fill:#FF6200;" d="M394.441,191.548C307.52,95.547,287.775,20.882,287.775,20.882s-15.054,6.718-32,22.11
                             l-21.333,244.556l21.333,209h0.001c104.842-0.001,189.833-84.992,189.833-189.833C445.608,263.409,421.423,221.349,394.441,191.548   z"></path>
                               <path style="fill:#FD7D21;" d="M223.775,84.882c-10.873,21.747-13.434,46.265-13.33,65.08c0.1,18.252-12.758,34.004-30.655,37.584
                             c-12.504,2.501-25.43-1.413-34.447-10.43l-17.568-17.568c0,0-26.044,35.911-30.507,42.667   c-20.047,30.346-31.613,66.786-31.321,105.945c0.778,104.581,85.244,188.388,189.828,188.388V42.992
                                C244.69,53.06,232.797,66.838,223.775,84.882z"></path> <g> <path style="fill:#FFB62D;" d="M405.561,181.48c-43.372-47.903-69.147-90.072-83.134-117.013    c-15.148-29.181-20.112-47.276-20.15-47.42L297.768,0l-16.104,7.183c-0.917,0.409-11.941,5.434-25.89,16.238l-10.667,18.794
                                   l10.667,22.117c8.336-9.351,16.934-16.341,23.849-21.18c11.282,28.696,39.881,87.981,103.699,158.465    c14.217,15.702,47.285,57.376,47.285,105.099c0,96.403-78.43,174.833-174.832,174.833h-0.001l-10.667,19.333l10.667,10.667h0.001    c112.945-0.001,204.832-91.888,204.832-204.833C460.608,265.764,440.544,220.118,405.561,181.48z"></path>
                                   <path style="fill:#FDCB02;" d="M132.499,430.925c-32.898-32.646-51.206-76.285-51.553-122.876    c-0.26-34.878,9.712-68.616,28.837-97.565c2.335-3.534,11.702-16.602,19.833-27.879l5.119,5.119    c12.592,12.592,30.53,18.025,47.996,14.532c24.888-4.978,42.852-27.004,42.713-52.375c-0.087-15.701,1.881-38.558,11.746-58.29
                                  c5.351-10.702,11.883-19.741,18.584-27.258V23.421c-14.692,11.381-32.628,29.175-45.417,54.753    c-12.515,25.031-15.018,52.9-14.913,71.87c0.061,11.04-7.761,20.626-18.598,22.793c-7.598,1.518-15.414-0.844-20.898-6.328    l-29.997-29.997l-10.319,14.229c-1.071,1.477-26.289,36.256-30.88,43.205c-22.419,33.937-34.109,73.47-33.806,114.325
                                     c0.406,54.565,21.864,105.686,60.421,143.948c38.554,38.259,89.839,59.329,144.407,59.329v-30    C209.176,481.548,165.396,463.57,132.499,430.925z"></path> </g>
                               <g> <path style="fill:#ED3800;" d="M255.775,206.042c-0.111,0-0.222,0.004-0.333,0.004l-24.997,117.329l24.997,117.329    c0.111,0,0.222,0.004,0.333,0.004c64.801,0,117.333-52.532,117.333-117.333C373.108,258.574,320.576,206.042,255.775,206.042z"></path>
                                   <path style="fill:#FF4B00;" d="M138.441,323.375c0,64.69,52.352,117.149,117,117.329V206.046    C190.794,206.226,138.441,258.685,138.441,323.375z"></path> </g> <g> <polygon style="fill:#D9E7EC;" points="319.432,254.503 286.177,254.503 255.441,299.513 245.108,340.882 255.441,348.214   "></polygon>
                                   <path style="fill:#D9E7EC;" d="M306.248,317.472c-20.858,0-36.601,13.971-36.601,38.372c0,24.597,15.742,38.371,36.601,38.371    s36.601-13.774,36.601-38.371C342.849,331.443,327.106,317.472,306.248,317.472z M306.248,372.963    c-4.329,0-8.658-3.936-8.658-17.12c0-13.184,4.329-17.12,8.658-17.12s8.658,3.936,8.658,17.12    C314.906,369.027,310.577,372.963,306.248,372.963z"></path>
                                   <polygon style="fill:#FAFCFD;" points="225.372,392.247 255.441,348.214 255.441,299.513 192.117,392.247   "></polygon> <path style="fill:#FAFCFD;" d="M241.902,290.907c0-24.4-15.742-38.372-36.601-38.372s-36.601,13.971-36.601,38.372    c0,24.597,15.742,38.372,36.601,38.372S241.902,315.504,241.902,290.907z M196.643,290.907c0-13.184,4.329-17.12,8.658-17.12
                                  c4.329,0,8.658,3.936,8.658,17.12c0,13.184-4.329,17.12-8.658,17.12C200.972,308.027,196.643,304.091,196.643,290.907z"></path> </g> </g> </svg>
                       Ưu Đãi Trong Tuần
                   </a>
               </h2>
            </div>
            {{--     Product Sale--}}
            <div class="grid grid-cols-5 pt-12  px-8 font-semibold bg-white ">
                <div class="border-r py-10 px-6 w-full h-full grid-rows-2 bg-white ">
                    <div class="grid group/item pt-2 z-10  ">
                        <div class=" relative  overflow-hidden z-20 ">
                            <a href="" class=""> <img src="{{asset('images/web/product/san-pham-3.webp')}}" class="p-1
                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                             group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item pt-2 ">
                            <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid group/item pt-2 z-10  ">
                        <div class=" relative  z-20 overflow-hidden ">
                            <a href="" class=""> <img src="{{asset('images/web/product/san-pham-3.webp')}}" class=" p-1
                                   transition-all ease-in duration-200 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200
                                group-hover/item:bottom-2 group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item pt-2 ">
                            <a href="" class="flex justify-center"> Giỏ trái cây 790k </a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-r py-10  w-full h-full grid-rows-3 bg-white ">
                    <div class=" grid-rows-2 group/item pt-2 z-10  ">
                        <div class=" relative  overflow-hidden z-20 row-span-2 ">
                            <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1  my-14
                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                             group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item  ">
                            <a href="" class="flex justify-center"> Giỏ trái cây 790k </a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 w-full h-full">
                        <div class=" relative  ">
                            <a href=""> <img class="h-full  my-14" src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                        </div>
                        <div class="">
                            <h4 class="flex justify-center"> Giỏ trái cây 1200k</h4>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 1.200.000</span>
                                <span class="text-gray-400 text-sm line-through"> 1.400.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-r py-10 px-6 w-full h-full grid-rows-2 bg-white ">
                    <div class="grid group/item pt-2 z-10  ">
                        <div class=" relative  overflow-hidden z-20 ">
                            <a href="" class=""> <img src="{{asset('images/web/product/san-pham-3.webp')}}" class="p-1
                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                             group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item pt-2 ">
                            <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid group/item pt-2 z-10  ">
                        <div class=" relative  z-20 overflow-hidden ">
                            <a href="" class=""> <img src="{{asset('images/web/product/san-pham-3.webp')}}" class=" p-1
                                   transition-all ease-in duration-200 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200
                                group-hover/item:bottom-2 group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item pt-2 ">
                            <a href="" class="flex justify-center"> Giỏ trái cây 790k </a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-r py-10  w-full h-full grid-rows-3 bg-white ">
                    <div class=" grid-rows-2 group/item pt-2 z-10  ">
                        <div class=" relative  overflow-hidden z-20 row-span-2  ">
                            <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1  my-14
                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                             group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item ">
                            <a href="" class="flex justify-center"> Giỏ trái cây 790k </a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 w-full h-full">
                        <div class=" relative ">
                            <a href=""> <img class="h-full  my-14" src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                        </div>
                        <div class="">
                            <h4 class="flex justify-center"> Giỏ trái cây 1200k</h4>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 1.200.000</span>
                                <span class="text-gray-400 text-sm line-through"> 1.400.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" py-10 px-6 w-full h-full grid-rows-2 bg-white ">
                    <div class="grid group/item pt-2 z-10  ">
                        <div class=" relative  overflow-hidden z-20 ">
                            <a href="" class=""> <img src="{{asset('images/web/product/san-pham-3.webp')}}" class="p-1
                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                             group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item pt-2 ">
                            <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid group/item pt-2 z-10  ">
                        <div class=" relative  z-20 overflow-hidden ">
                            <a href="" class=""> <img src="{{asset('images/web/product/san-pham-3.webp')}}" class=" p-1
                                   transition-all ease-in duration-200 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                            <div class="absolute top-0 left-0 bg-red-600  rounded font-normal px-2 ">
                                <span class="text-white text-xs line-clamp-1"> - 28%</span>
                            </div>
                            <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200
                                group-hover/item:bottom-2 group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                            </div>
                        </div>
                        <div class=" z-30 bg-white group/item pt-2 ">
                            <a href="" class="flex justify-center"> Giỏ trái cây 790k </a>
                            <div class="flex gap-4 justify-center">
                                <span class="text-red-500 font-bold"> 790.000đ</span>
                                <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full ">
            <div class="w-full flex justify-center mt-14">
                <div class="text-2xl" >
                    <h2 class="text-4xl text-blue-900 font-bold "> Khách hàng nói về chúng tôi</h2>
                    <span class="flex justify-center pt-3"> <img src="{{asset('images/bg-title-after.webp')}}" alt=""></span>
                </div>
            </div>
            <div>
                <div class=" grid grid-cols-2 gap-5 pt-8">
                    <div class="m-2  bg-white overflow-hidden rounded-3xl ">
                        <img src="{{asset('images/banner_1.webp')}}" class=" rounded-3xl transition-all ease-in-out  hover:scale-105" alt="">
                    </div>
                    <div class="p-2 bg-white overflow-hidden rounded-3xl ">
                        <img src="{{asset('images/banner_2.webp')}}" class="rounded-3xl transition-all ease-in-out  hover:scale-105" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{--     Block product 1--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-8">
            <div style="background-image:url('{{asset('images/web/background/bg-title-link-1.webp')}}');" class=" rounded-2xl col-span-3 bg-cover w-full h-[100%]">
                <div class="p-8" >
                    <h2 class=" text-xl font-bold"> Trái cây nhập khẩu </h2>
                    <div class="mt-4">
                        <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Táo</a> <br>
                        <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Nho</a> <br>
                        <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Hồng Treo Gió</a>
                    </div>
                    <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full "> Mua ngay </button>
                </div>
            </div>
            <div class=" w-full h-full  col-span-9">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class="flex justify-center"> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-1.webp')}}" class="p-1 w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-2.webp')}}"  class="p-1 w-2/3
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev border w-8 h-8 focus:text-xs rounded-full button_navigation "  style="font-size: 5px !important;"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
        {{--     Block product 2--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-8 ">
            <div class=" w-full h-full  col-span-9">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class="flex justify-center"> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-1.webp')}}" class="p-1 w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-2.webp')}}"  class="p-1 w-2/3
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev border w-8 h-8 rounded-full   "  style="font-size: 15px !important;"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div style="background-image:url('{{asset('images/web/background/bg-title-link-2.webp')}}');" class=" rounded-2xl col-span-3 bg-cover w-full h-[100%]">
                <div class="p-8 w-full h-full" >
                    <h2 class=" text-xl font-bold"> Giỏ trái cây 300k - 600k </h2>
                    <ul class="mt-4  block gap-4  w-full h-full">
                       <li>
                           <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 300k</a>
                       </li>
                        <li class="mt-1">
                            <a href="" ><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 350k</a>
                        </li>
                        <li class="mt-1">
                            <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 400k</a>
                        </li>
                        <li class="mt-1">
                            <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 450k</a>
                        </li>
                        <li class="mt-1">
                            <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 500k </a>
                        </li>
                        <li class="mt-1">
                            <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 550k </a>
                        </li>
                        <li class="mt-1">
                            <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 600k</a>
                        </li>
                        <li class="mt-1">
                            <a href=""><i class="fa-solid fa-circle text-green-400 text-[7px]"></i> Giỏ trái cây 650k</a>
                        </li>
                        <li class="mt-1">
                            <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full "> Mua ngay </button>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
        {{--     Block product 3--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-8">
            <div style="background-image:url('{{asset('images/web/background/bg-title-link-3.webp')}}');" class=" rounded-2xl col-span-3 bg-cover w-full h-[100%]">
                <div class="p-8" >
                    <h2 class=" text-xl font-bold hover:text-amber-400"><a href=""> Giỏ trái cây 700k - 900k</a></h2>
                    <div class="mt-4">
                         <ul>
                             <li class="hover:text-amber-400 ">
                                 <a href=""  > <i class="fa-solid fa-circle text-green-400 text-[7px] "></i> Giỏ trái cây 700k </a>
                             </li>
                             <li class="hover:text-amber-400 mt-2">
                                 <a href=""  > <i class="fa-solid fa-circle text-green-400 text-[7px] "></i> Giỏ trái cây 750k </a>
                             </li>
                             <li class="hover:text-amber-400 mt-2">
                                 <a href=""  > <i class="fa-solid fa-circle text-green-400 text-[7px] "></i> Giỏ trái cây 800k </a>
                             </li>
                             <li class="hover:text-amber-400 mt-2 ">
                                 <a href=""  > <i class="fa-solid fa-circle text-green-400 text-[7px] "></i> Giỏ trái cây 850k </a>
                             </li>
                             <li class="hover:text-amber-400 mt-2 ">
                                 <a href=""  > <i class="fa-solid fa-circle text-green-400 text-[7px] "></i> Giỏ trái cây 900k </a>
                             </li>
                         </ul>
                    </div>
                    <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full "> Mua ngay </button>
                </div>
            </div>
            <div class=" w-full h-full  col-span-9">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class="flex justify-center"> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-1.webp')}}" class="p-1 w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-2.webp')}}"  class="p-1 w-2/3
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev border w-8 h-8 rounded-full   "  style="font-size: 15px !important;"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
        {{--    Block product 4--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-8 ">
            <div class=" w-full h-full  col-span-9">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class="flex justify-center"> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-1.webp')}}" class="p-1 w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-2.webp')}}"  class="p-1 w-2/3
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg p-2">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-2.webp')}}" class="p-1
                                            transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=""> <img src="{{asset('images/web/product/gio-trai-cay-1.webp')}}" class="p-1
                                                        transition-all ease-in duration-300 group-hover/item:scale-110  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev border w-8 h-8 rounded-full   "  style="font-size: 15px !important;"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div style="background-image:url('{{asset('images/web/background/bg-title-link-2.webp')}}');" class=" rounded-2xl col-span-3 bg-cover w-full h-[100%]">
                <div class="p-8" >
                    <h2 class=" text-xl font-bold hover:text-amber-400"> Giỏ trái cây trên 900k </h2>
                    <div class="mt-4">
                     <ul>
                         <li class="hover:text-amber-400">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 950k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 1000k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 1200k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 1400k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 1500k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 1600k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 1800k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 2000k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 2500k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 3000k</a>
                         </li>
                         <li class="hover:text-amber-400 mt-2  ">
                             <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-1"></i> Giỏ trái cây 3500k</a>
                         </li>
                     </ul>
                    </div>
                    <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full "> Mua ngay </button>
                </div>
            </div>

        </div>
        {{--    Block product 5--}}
        <div class="w-full h-full grid grid-cols-12 gap-5 mt-8">
            <div style="background-image:url('{{asset('images/web/background/bg-title-link-4.webp')}}');" class=" rounded-2xl col-span-3 bg-cover bg-center w-full h-[100%]">
                <div class="p-8" >
                    <h2 class=" text-xl font-bold hover:text-amber-400"><a href=""> Trái cây sấy, hạt dinh dưỡng</a></h2>
                    <div class="mt-4">
                       <ul>
                           <li class="hover:text-amber-400">
                               <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-2"></i> Trái cây sấy</a> <br>
                           </li>
                           <li class="hover:text-amber-400 ">
                               <a href="" > <i class="fa-solid fa-circle text-green-400 text-[7px] pr-2"></i> Hạt dinh dưỡng</a> <br>
                           </li>
                       </ul>
                    </div>
                    <button class="bg-red-600 text-white text-xs px-4 py-2 mt-4 rounded-full hover:bg-amber-500 "> Mua ngay </button>
                </div>
            </div>
            <div class=" w-full h-full  col-span-9">
                <div class="swiper mySwiper w-full h-full ">
                    <div class="swiper-wrapper  ">
                        <div class="swiper-slide  w-1/6 border rounded-lg ">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-1.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-5.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg ">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-2.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-6.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg ">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-3.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-9.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide  w-1/6 border rounded-lg ">
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-4.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid group/item pt-2 z-10  ">
                                <div class=" relative overflow-hidden z-20 ">
                                    <a href="" class=" flex justify-center"> <img src="{{asset('images/web/product/san-pham-hop-8.webp')}}" class="  w-3/4
                                            transition-all ease-in duration-300 group-hover/item:scale-105  group-hover/item:z-0 " alt="Nho sữa Hàn Quốc Hộp"></a>
                                    <div class=" absolute -bottom-10 left-12  transition-all ease-in duration-200  group-hover/item:bottom-2
                                            group-hover/item:opacity-100 group-hover/item:translate-y-0  flex justify-center gap-2">
                                        <button class="rounded-full bg-red-600 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào yêu thích"> <i class="fa-regular fa-heart"></i></button>
                                        <button class="rounded-full bg-green-500 w-10 h-10 text-white text-lg hover:bg-amber-400" title="Thêm vào giỏ hàng"> <i class="fa-solid fa-cart-shopping"></i> </button>
                                    </div>
                                </div>
                                <div class=" z-30 bg-white group/item pt-2 ">
                                    <a href="" class="flex justify-center"> Nho sữa Hàn Quốc Hộp</a>
                                    <div class="flex gap-4 justify-center">
                                        <span class="text-red-500 font-bold"> 790.000đ</span>
                                        <span class="text-gray-400 text-sm line-through"> 1.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-prev border w-8 h-8 rounded-full   "  style="font-size: 15px !important;"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
        {{--    Block adress shop--}}
        <div class="w-full  mt-12 ">
            <div class="grid grid-cols-5 w-full  gap-4">
                <div class="col-span-1 w-full flex justify-center py-3 px-6 bg-cover bg-center  rounded-3xl shadow hover:drop-shadow-lg  hover:shadow-gray-400 " style=" background-image:url('{{asset('images/web/background/background-address.webp')}}')  ">
                    <div class=" text-center">
                        <h3 class="font-bold text-green-400 text-2xl"> Hala Fruit Xuân La</h3>
                       <div class="mt-8">
                           <p>Số 95 Xuân La - Tây Hồ - Hà Nôi</p>
                           <p>0379.866.333</p>
                       </div>
                        <div class="mt-2">
                            <a href="" class=" decoration-1 underline font-bold"> Đi đến cửa hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full flex justify-center py-3 px-6 bg-cover bg-center rounded-3xl shadow hover:drop-shadow-lg  hover:shadow-gray-400 " style=" background-image:url('{{asset('images/web/background/background-address.webp')}}')  ">
                    <div class=" text-center">
                        <h3 class="font-bold text-green-400 text-2xl"> Hala Fruit Đào Tấn</h3>
                        <div class="mt-8">
                            <p>Số 97 Đào Tấn - Ba Đình - Hà Nội</p>
                            <p>0379.866.333</p>
                        </div>
                        <div class="mt-2">
                            <a href="" class=" decoration-1 underline font-bold"> Đi đến cửa hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full flex justify-center py-3 px-6 bg-cover bg-center rounded-3xl shadow hover:drop-shadow-lg  hover:shadow-gray-400 " style=" background-image:url('{{asset('images/web/background/background-address.webp')}}')  ">
                    <div class=" text-center">
                        <h3 class="font-bold text-green-400 text-2xl"> Hala Fruit Phạm Ngọc Thạch</h3>
                        <div class="mt-8">
                            <p>Số 24B7 Phạm Ngọc Thạch - Đống Đa - HN</p>
                            <p>0379.866.333</p>
                        </div>
                        <div class="mt-2">
                            <a href="" class=" decoration-1 underline font-bold"> Đi đến cửa hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full flex justify-center py-3 px-6 bg-cover bg-center rounded-3xl shadow hover:drop-shadow-lg  hover:shadow-gray-400 " style=" background-image:url('{{asset('images/web/background/background-address.webp')}}')  ">
                    <div class=" text-center">
                        <h3 class="font-bold text-green-400 text-2xl"> Hala Fruit Chùa Láng</h3>
                        <div class="mt-8">
                            <p class="font-normal">45 P. Chùa Láng, Láng Thượng, Đống Đa, Hà Nội</p>
                            <p>0379.866.333</p>
                        </div>
                        <div class="mt-2">
                            <a href="" class=" decoration-1 underline font-bold"> Đi đến cửa hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full flex justify-center py-3 px-6 bg-cover bg-center rounded-3xl shadow hover:drop-shadow-lg  hover:shadow-gray-400 " style=" background-image:url('{{asset('images/web/background/background-address.webp')}}')  ">
                    <div class=" text-center">
                        <h3 class="font-bold text-green-400 text-2xl"> Hala Fruit Tràng Thi</h3>
                        <div class="mt-8">
                            <p class="font-normal">20 Tràng Thi- Hàng Trống- Hoàn Kiếm HN</p>
                            <p>0379.866.333</p>
                        </div>
                        <div class="mt-2">
                            <a href="" class=" decoration-1 underline font-bold"> Đi đến cửa hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--    Blog news--}}
        <div class="w-full h-full mt-16">
            <div class="" >
                <div class="">
                    <h2 class="text-4xl font-bold flex justify-center"> Tin Tức </h2>
                    <div class="flex justify-center ">
                        <img src="{{asset('images/bg-title-after.webp')}}" alt="" class="w-12 h-5">
                    </div>
                    <div class="grid grid-cols-4 gap-5 w-full mt-3">
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-kem-hoa-3-trieu.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả có hoa</a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-dam-tang-2-trieu-500k.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả cưới NYC</a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-kem-hoa-800.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả 800k </a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full col-span-1 border relative py-10 rounded-lg">
                            <div class="">
                                <a href="">
                                    <img src="{{asset('images/web/product/gio-hoa-qua-ha-la-500.webp')}}" class="w-full h-auto" alt="">
                                </a>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t  from-[rgba(0,0,0,0.65)] z-1 flex items-end rounded-lg">
                                <div class="pl-6 text-white mb-3">
                                    <h3 class="font-bold hover:text-amber-400"><a href=""> Giỏ hoa quả 500k </a></h3>
                                    <span class="mt-2 text-xs"> Tác giả : Lò Thị Son | 01/05/2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
@endsection
