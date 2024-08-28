<ul>
    @if($category->parent_id != 0  )
        @php
            $cate_parent =  $category->parent;
        @endphp
        @foreach($cate_parent->children as $child)
            <ul class="" id="menu-category-body">
                <li class="mt-2 hover:text-amber-400" >
                    <a href="{{route('shop.product_slug',['slug' => $child->slug , ...$query])}}"> {{$child->name}}</a>
                </li>
            </ul>
        @endforeach
    @else
        @foreach($category->children as $child)
            <ul class="" id="menu-category-body">
                <li class="mt-2 hover:text-amber-400" >
                    <a href="{{route('shop.product_slug',['slug' => $child->slug , ...$query])}}"> {{$child->name}}</a>
                </li>
            </ul>
        @endforeach
    @endif
</ul>
