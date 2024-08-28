@extends('layouts.layoutAdmin')
@section('content')
    <div class="">
        <div class="block justify-between items-center p-4 mx-4 mt-4 mb-4 bg-white rounded-2xl shadow-xl shadow-gray-200 lg:p-5 sm:flex">
            <div class="mb-1 w-full">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Trang chủ
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">
                                        Sản phẩm
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">Sửa Thông Tin Sản Phẩm</h1>
                </div>
            </div>
        </div>
        <div class="p-4 mx-4 mt-4 mb-4 bg-white rounded-2xl shadow-xl shadow-gray-200 lg:p-5  ">
            <form action="{{route('admin.update_product',$product->id)}}" method="POST" class="w-full h-full" >
                @csrf
                <div class="grid grid-cols-2 border gap-6 p-3 rounded-2xl font-normal">
                    <div class="col-span-1">
                        <label for="category_id" class="block "> Danh Mục Sản Phẩm  <span class="text-red-600"> * </span>  </label>
                        <select name="category_id" id="category_id" class="rounded-lg w-full mt-3">
                            <option value="{{ $product->category->id}}"> {{$product-> category -> name}}</option>
                            @foreach($categories as  $item)
                                <option value="{{$item ->id}}"> {{$item -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="post_category_id" class="block "> Danh Mục Bài Viết <span class="text-red-600"> * </span> </label>
                        <select name="post_category_id" id="post_category_id" class="rounded-lg w-full mt-3">
                           @foreach($current_post as $post_cate)
                                <option value="{{$post_cate->id}}"> {{$post_cate->name}} </option>
                           @endforeach
                               @foreach( $cate_post as $item_post)
                                   <option value="{{$item_post->id}}"> {{$item_post->name}} </option>
                               @endforeach
                        </select>
                    </div>
                </div>
                <div class=" border mt-5 rounded-2xl">
                    <h3 class="mt-3 p-3 text-2xl"> Thông Tin Sản Phẩm </h3>
                   <div class="grid grid-cols-2 p-3 gap-10">
                       <div class="col-span-1">
                           <div class="mt-5">
                               <label for="post_name" class="block"> Tên Sản Phẩm <span class="text-red-600"> * </span> </label>
                               <input type="text" id="post_name" name="name" class="rounded-lg w-full mt-2" value="{{$product->name}}">
                           </div>
                           <div class="mt-5">
                               <label for="post_slug"> Slug</label>
                               <input type="text" id="post_slug" name="slug" class="rounded-lg w-full mt-2" value="{{$product->slug}}">
                           </div>
                           <div class="mt-5">
                               <label for="product_code"> Mã Sản Phẩm </label>
                               <input type="text" id="product_code" name="barcode" class="rounded-lg w-full mt-2" value="{{$product->barcode}}">
                           </div>
                           <div class="mt-5">
                               <label for="post_description" class="block mb-2" > Giới Thiệu Sản Phẩm </label>
                               <textarea type="text" id="post_description" name="description" class="rounded-lg w-full" >{!! $product->description !!} </textarea>
                           </div>
                       </div>
                       <div class="col-span-1">
                           <div class="mt-5">
                               <label for="post_name" class="block"> Số Lượng <span class="text-red-600"> * </span> </label>
                               <input type="text" id="post_name" name="quantity" class="rounded-lg w-full mt-2" value="{{$product->quantity}}">
                           </div>
                           <div class="mt-5">
                               <label for="post_slug"> Giá <span class="text-red-600"> * </span> </label>
                               <input type="text" id="post_slug" name="price" class="rounded-lg w-full mt-2" value="{{$product->price}}">
                           </div>
                           <div class="mt-5">
                               <label for="post_slug"> Chiết Khấu </label>
                               <input type="text" id="post_slug" name="discount_persent" class="rounded-lg w-full mt-2" value="{{$product->discount_persent}}">
                           </div>
                           <div class="mt-5">
                               <label for="product_code"> Thương Hiệu <span class="text-red-600"> * </span> </label>
                               <select name="brand_id" id="product_code" class="rounded-lg w-full mt-2" >
                                       <option value="{{$product->brand ? $product->brand->id : '' }}"> {{$product->brand ? $product->brand->name : '' }}</option>
                                       @foreach($brands as $brand)
                                           <option value="{{$brand->id}}"> {{$brand->name}}</option>
                                       @endforeach
                               </select>
                           </div>
                           <div class="mt-5">
                               <label for="product_post" class="block mb-2" > Bài Viết </label>
                               <select name="post_id" id="product_post" class="rounded-lg w-full mt-2" >
                                   @foreach( $product->post as $product_item)
                                       <option value="{{$product_item->id }}">{{ $product_item->name}}</option>
                                   @endforeach
                                   @foreach( $posts as $post)
                                       <option value="{{$post->id }}">{{ $post->name}}</option>
                                   @endforeach

                               </select>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="grid grid-cols-2 p-3 gap-x-6 border mt-5 rounded-2xl">
                    <div class="col-span-1">
                        <div class="mt-5">
                            <label for="post_name" class="block"> Tên Bài Viết </label>
                            <input type="text" id="post_name" name="post_name" class="rounded-lg w-full mt-2" value="{{$product->post[0]->name}}">
                        </div>
                        <div class="mt-5">
                            <label for="post_slug"> Slug Bài Viết </label>
                            <input type="text" id="post_slug" name="post_slug" class="rounded-lg w-full mt-2"value="{{$product->post[0]->slug}}">
                        </div>
                        <div class="mt-5">
                            <label for="post_description" class="block mb-2" > Mô Tả Ngắn Bài Viết </label>
                            <textarea type="text" id="post_description" name="post_description" class="rounded-lg w-full" >
                                {!! $product->post[0]->description !!}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="mt-5">
                            <label for="post_seo_title" class="block"> Tiêu Đề SEO </label>
                            <input type="text" id="post_seo_title" name="seo_title" class="rounded-lg w-full mt-2" placeholder="Enter Seo Title">
                        </div>
                        <div class="mt-5">
                            <label for="post_seo_keyword" class="block"> Từ Khóa SEO </label>
                            <input type="text" id="post_seo_keyword" name="seo_keywords" class="rounded-lg w-full mt-2" placeholder="Enter Seo Keyword">
                        </div>
                        <div class="mt-5">
                            <label for="post_seo_description" class="block mb-2"> Mô Tả Ngắn SEO </label>
                            <textarea type="text" id="post_seo_description" name="seo_description" class="rounded-lg w-full "  placeholder="Enter Seo Description"> </textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-5 ">
                    <div class="p-3 border rounded-2xl ">
                        <label for="post_content" class="block mb-2"> Nội Dung Bài Viết </label>
                        <textarea name="post_content" id="post_content" class="w-full rounded-lg">
                        {!! $product->post[0]->content !!}
                        </textarea>
                    </div>
                </div>
                <div class=" mt-5 p-6 pl-0 rounded-b border-gray-200">
                    <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="submit">
                        Lưu Thay Đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: '#post_content',
            statusbar: false,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
            },
            menubar: 'favs file edit view insert format tools table help',
            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Laravel File manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        console.log(message)
                        let url = message.content;  // Lấy ra url của file ảnh
                        url = url.replace(/^.*\/\/[^\/]+/, ''); // Xóa domain ảnh
                        message.content = url // Gán lại url cho ảnh
                        callback(message.content, { text: message.text })
                    },

                })}
        });

        tinymce.init({
            selector: '#post_description',  // change this value according to the HTML
            menubar:false,
            statusbar:false,
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent'
        });

        tinymce.init({
            selector: '#post_seo_description',  // change this value according to the HTML
            menubar:false,
            statusbar:false,
            toolbar: 'undo redo ',
        });
    </script>
@endsection
