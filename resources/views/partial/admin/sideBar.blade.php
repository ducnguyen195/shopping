<aside id="sidebar" class="flex hidden  fixed top-0 left-0 z-20 flex-col flex-shrink-0 pt-16 w-64 h-full duration-200 lg:flex transition-width" aria-label="Sidebar">
    <div class="flex relative flex-col flex-1 pt-0 min-h-0 bg-green-500">
        <div class="flex overflow-y-auto overflow-hidden flex-col flex-1 pt-8 pb-4">
            <div class="flex-1 px-2 bg-green-500" id="sidebar-items">
                <ul class="pb-2 pt-1">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only"> Search </label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-dark-500 text-sm font-light rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full pl-10 p-2.5 mb-2" placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="#" class="flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600  rounded-lg hover:bg-gray-200 group  transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white text-dark-700 w-8 h-8 p-2.5 mr-1 rounded-lg text-center grid place-items-center">
                                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>shop </title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1716.000000, -439.000000)" fill="currentColor" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(0.000000, 148.000000)">
                                                    <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" opacity="0.598981585"></path>
                                                    <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-3 font-bold " sidebar-toggle-item="">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.brand')}}" class="flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg  hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white  text-dark-700 w-8 h-8 mr-1 rounded-lg text-center grid place-items-center">
                                <svg width="15px" height="15px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>document</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1870.000000, -591.000000)" fill="currentColor" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(154.000000, 300.000000)">
                                                    <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                    <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-3 font-bold text-sm" sidebar-toggle-item="">
                                Thương Hiệu
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.post')}}" class="flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg hover:bg-gray-200  group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-regular fa-newspaper"></i>
                            </div>
                            <span class="ml-3 font-bold text-sm  " sidebar-toggle-item="">
                                Bài Viết
                            </span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="w-full flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg hover:bg-gray-200  group transition-all duration-200" sidebar-toggle-collapse="" aria-controls="dropdown-ecommerce" data-collapse-toggle="dropdown-ecommerce" aria-expanded="true">
                            <div class="bg-white  text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <svg class="text-dark" width="15px" height="15px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>basket</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1869.000000, -741.000000)" fill="currentColor" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g id="basket" transform="translate(153.000000, 450.000000)">
                                                    <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path>
                                                    <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-2  text-sm font-bold " sidebar-toggle-item="">
                               Quản Lý Danh Mục
                            </span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                        <ul id="dropdown-ecommerce" sidebar-toggle-list="" class="pb-2 pt-1 hidden">
                            <li>
                                <a href="{{route('admin.category',$model_type = 'product')}}" class="text-sm  text-white hover:text-blue-600 font-medium rounded-lg flex items-center p-2 group  hover:bg-gray-200 transition duration-75 pl-11">
                                    <div class="bg-white w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                        <i class="fa-regular fa-newspaper"></i>
                                    </div>
                                    <span  >
                                        Danh Mục Sản Phẩm
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.category',$model_type = 'post')}}" class="text-sm text-white hover:text-blue-600 font-medium rounded-lg flex items-center p-2 group   hover:bg-gray-200 transition duration-75 pl-11">
                                    <span class="" >
                                        Danh Mục Bài Viết
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="w-full flex items-center py-2.5 px-4 text-base font-normal  text-white hover:text-blue-600 rounded-lg hover:bg-gray-200  group transition-all duration-200" sidebar-toggle-collapse="" aria-controls="dropdown-image" data-collapse-toggle="dropdown-image" aria-expanded="true">
                            <div class="bg-white  text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-regular fa-images"></i>
                            </div>
                            <span class="ml-3 text-sm font-bold" sidebar-toggle-item="">
                                Quản Lý Ảnh
                            </span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                        <ul id="dropdown-image" sidebar-toggle-list="" class="pb-2 pt-1 hidden">
                            <li>
                                <a href="{{route('admin.image',$type = 'product')}}" class="text-sm  text-white hover:text-blue-600 font-medium rounded-lg flex items-center p-2 group  hover:bg-gray-200 transition duration-75 pl-11">
                                    <span > Ảnh Sản Phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.image',$type = 'post')}}" class="text-sm font-medium  text-white hover:text-blue-600 rounded-lg flex items-center p-2 group   hover:bg-gray-200 transition duration-75 pl-11">
                                    <span>
                                        Ảnh Bài Viết
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('admin.product')}}" class="flex items-center py-2.5 px-4 text-base font-bold text-white hover:text-blue-600 rounded-lg  hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-brands fa-linux text-[20px]"></i>
                            </div>
                            <span class="ml-3 text-black-50 text-sm" sidebar-toggle-item="">
                                Quản Lý Sản Phẩm
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.order')}}" class="flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg  hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-solid fa-note-sticky"></i>
                            </div>
                            <span class="ml-3 font-bold text-sm" sidebar-toggle-item="">
                                Quản Lý Đơn Hàng
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg  hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white  text-dark-700 w-8 h-8 p-2.5 mr-1 rounded-lg text-center grid place-items-center">
                                <svg width="15px" height="15px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>credit-card</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(453.000000, 454.000000)">
                                                    <path class="fill-slate-800 opacity-60" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                                                    <path class="fill-slate-800" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-3 font-bold text-sm" sidebar-toggle-item="">
                                Quản Lý Thanh Toán
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.shop')}}" class="flex items-center py-2 px-4 text-base font-normal text-white hover:text-blue-600 text-dark-500 rounded-lg  hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-solid fa-shop"></i>
                            </div>
                            <span class="ml-3 font-bold text-sm" sidebar-toggle-item="">
                                Hệ Thống Cửa Hàng
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center py-2 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg  hover:bg-gray-200 group transition-all duration-200" sidebar-toggle-collapse="">
                            <div class="bg-white  text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-solid fa-inbox"></i>
                            </div>
                            <span class="ml-3 font-bold text-sm" sidebar-toggle-item="">
                                Yêu Cầu Khách Hàng
                            </span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="w-full flex items-center py-2.5 px-4 text-base font-normal text-white hover:text-blue-600 rounded-lg hover:bg-gray-200  group transition-all duration-200" sidebar-toggle-collapse="" aria-controls="dropdown-setup" data-collapse-toggle="dropdown-setup" aria-expanded="true">
                            <div class="bg-white   text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <span class="ml-3 font-bold text-sm" sidebar-toggle-item="">
                                Cài  Đặt
                            </span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                        <ul id="dropdown-setup" sidebar-toggle-list="" class="pb-2 pt-1 hidden">
                            <li>
                                <a href="#" class="text-sm font-medium text-white hover:text-blue-600 rounded-lg flex items-center p-2 group  hover:bg-gray-200 transition duration-75 pl-11">
                                    <span > Cấu Hình Thông Tin Web</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-sm font-medium text-white hover:text-blue-600 rounded-lg flex items-center p-2 group   hover:bg-gray-200 transition duration-75 pl-11">
                                    <span>  Banner Web</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr class="border-0 h-px bg-gradient-to-r from-gray-100 via-gray-300 to-gray-100">
            </div>
        </div>
        <div class="hidden relative bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-green-500" sidebar-bottom-menu="">
        </div>
    </div>
</aside>
