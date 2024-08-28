<ul class="z-50 invisible group-hover/edit:visible duration-300 absolute top-9 left-0 w-60 bg-white text-black  font-normal  border ">
    <li class="absolute -top-5 left-4">
        <div class="  text-3xl text-gray-50 ">
            <i class="fa-solid fa-caret-up"></i>
        </div>
    </li>
    @foreach( $categories as $category)
        @php $query = [] @endphp
        <li class=" group/item border-b text-[14px] w-full p-2 flex items-center justify-between relative">
            <a href="{{route('shop.product_slug', ['slug' => $category->slug , ...$query])}}" class="group-hover/item:text-amber-400">
                {{$category->name}}
            </a>
            <i class="fa-solid fa-caret-right group-hover/item:text-amber-400"></i>
            @if($category->children)
                <ul class="invisible group-hover/item:visible absolute top-0 left-60 bg-white w-full border mr-1 ">
                    @foreach($category->children as $child)
                        <li class="border-b w-full p-2 flex items-center justify-between hover:text-amber-400">
                            <a href="{{route('shop.product_slug', ['slug' => $child->slug , ...$query])}}">
                                {{$child->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul class="hidden">

                </ul>
            @endif
        </li>
    @endforeach
</ul>
