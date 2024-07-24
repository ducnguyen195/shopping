<ul>
    @if($category->parent_id == 0  )
       @foreach($category->children as $child)
            <ul class="ml-5 " id="menu-category-body">
               <li class="mt-2" >
                   <a href="{{route('shop.product_slug',['slug' => $child->slug , ...$query])}}"> {{$child->name}}</a>
               </li>

            </ul>
            @endforeach

    @endif

{{--    <li class="block relative "  id="menu-category-1" data-accordion="open">--}}
{{--        <a href=""> Trái cây nhập khẩu </a>--}}
{{--        <span class="text-sm text-gray-900 cursor-pointer absolute right-0  "  data-accordion-target="#menu-category-body" aria-expanded="false" aria-controls="menu-category-body">--}}
{{--            <i class="fa-solid fa-plus"></i>--}}
{{--        </span>--}}
{{--        <ul class="ml-5 hidden" id="menu-category-body">--}}
{{--            <li class="mt-2" > Táo </li>--}}
{{--            <li  class="mt-2" > Nho </li>--}}
{{--            <li  class="mt-2" > Hồng Treo Gió </li>--}}
{{--        </ul>--}}
{{--    </li>--}}
{{--    <li class="block relative mt-3" id="menu-category-2" data-accordion="open" >--}}
{{--        <a href=""> Giỏ trái cây 300k - 650k  </a>--}}
{{--        <span class="text-sm text-black cursor-pointer absolute right-0 " data-accordion-target="#menu-category-body-1" aria-expanded="false" aria-controls="menu-category-body-1">--}}
{{--            <i class="fa-solid fa-plus"></i>--}}
{{--        </span>--}}
{{--        <ul class="ml-5 hidden" id="menu-category-body-1">--}}
{{--            <li class="mt-2" > Táo </li>--}}
{{--            <li  class="mt-2" > Nho </li>--}}
{{--            <li  class="mt-2" > Hồng Treo Gió </li>--}}
{{--        </ul>--}}
{{--    </li>--}}
{{--    <li class="flex justify-between mt-3" >--}}
{{--        <a href=""> Giỏ trái cây 700k - 900k </a>--}}
{{--        <span class="text-sm">  <i class="fa-solid fa-plus"></i> </span>--}}
{{--    </li>--}}
{{--    <li class="flex justify-between mt-3">--}}
{{--        <a href=""> Giỏ trái cây trên 900k </a>--}}
{{--        <span class="text-sm">  <i class="fa-solid fa-plus"></i> </span>--}}
{{--    </li>--}}
{{--    <li class="flex justify-between mt-3">--}}
{{--        <a href=""> Trái cây sấy hạt dinh dưỡng </a>--}}
{{--        <span class="text-sm">  <i class="fa-solid fa-plus"></i> </span>--}}
{{--    </li>--}}
</ul>
