@extends('layouts.layoutAdmin')
@section('content')
    <div>
        <div class="m-5 p-5 rounded-2xl shadow-lg shadow-gray-200 bg-white">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Brand</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Add New Brand</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div>
                <h2 class="font-bold text-2xl"> Add New Category</h2>
            </div>

        </div>
        <div class="m-5 p-5 grid grid-cols-3 gap-4 " >
            <form action="{{route('admin.store_category')}}"  method="POST"  class="w-full col-span-2 self-center rounded-2xl shadow-lg shadow-gray-200 bg-white " >
                @csrf
                <div class=" mt-5 gap-4 px-10 ">
                    <div class="">
                        <div class="" >
                            <label for="name" class="block mb-2 font-medium text-gray-600"> Name</label>
                            <input type="text" id="name" name="name" class=" rounded-lg outline-violet-300 w-full " placeholder="Enter name ..." required>
                        </div>
                        <div class=" mt-5">
                            <label for="" class=" block mb-2 font-medium text-gray-600" > Parent Id </label>
                            <section >
                                <select class="rounded-lg outline-violet-300 w-full" name="parent_id" id="">
                                    <option value="0"> Không có danh mục cha</option>
                                    @foreach($option_parent_id as $parent)
                                        <option value="{{$parent->id}}"> {{$parent->name}}</option>
                                        @if($parent->children)
                                            @foreach($parent->children as $child2)
                                                <option value="{{$child2->id}}"> {{$child2->name}}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </section>
                        </div>
                    </div>
                    <div class=" mt-5" >
                        <label for="model_type" class="block mb-2 font-medium text-gray-600"> Model Type </label>
                        <section class=""  >
                            <select name="model_type" id="model_type" class="rounded-lg outline-violet-300 w-full" required >
                                <option value="0"> Chọn kiểu danh mục</option>
                                <option value="product"> product</option>
                                <option value="post"> post</option>
                            </select>
                        </section>
                    </div>
                    <div class="mt-5" >
                        <label for="brand_name" class="block mb-2 font-medium text-gray-600"> Icon Path</label>
                        <div class="input-group flex">
                            <input type="text" id="image_label" class="form-control rounded-lg outline-violet-300 w-full" name="icon_path"
                                   aria-label="Image" aria-describedby="button-image">
                            <div class="input-group-append">
                                <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="button" id="button-image">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class=" mt-5" >
                        <label for="add_slug" class="block mb-2 font-medium text-gray-600"> Slug</label>
                        <input type="text" id="add_slug" name="slug" class=" rounded-lg outline-violet-300 w-full " placeholder="Enter Slug ..." >
                    </div>
                    <div class=" mt-5 p-6 pl-0 rounded-b border-gray-200">
                        <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="submit">Add Brand</button>
                    </div>
                </div>
            </form>
            <div class="w-full h-2/3 rounded-2xl shadow-lg shadow-gray-200 bg-white p-5 " >
                <div class=" w-full h-full" id="fm">
                    <h3 class="mb-2 font-medium text-gray-600 "> Image Preview</h3>
                    <img src="https://t3.ftcdn.net/jpg/04/60/01/36/360_F_460013622_6xF8uN6ubMvLx0tAJECBHfKPoNOR5cRa.jpg" id="preview" class=" w-full h-[90%]" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();
                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            // cấu hình link
            document.getElementById('image_label').value = $url;
            $('#preview').attr('src',$url);
        }
    </script>
@endsection
