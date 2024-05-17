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
                <h2 class="font-bold text-2xl"> Add New Brand</h2>
            </div>
        </div>
        <div class="m-5 p-5 grid grid-cols-2  " >
            <form action="{{route('admin.store_brand')}}"  method="POST"  class="w-full   col-span-1 self-center  rounded-2xl  shadow-lg shadow-gray-200   bg-white " >
                @csrf
                <div class=" mt-5 gap-4 px-10 ">
                    <div class="">
                        <div class="" >
                            <label for="brand_name" class="block mb-2 font-medium text-gray-600"> Brand Name</label>
                            <input type="text" id="brand_name" name="name" class=" rounded-lg outline-violet-300 w-full " placeholder="Enter brand ..." required>
                        </div>
                        <div class=" mt-5">
                            <label for="" class=" block mb-2 font-medium text-gray-600" > Slug </label>
                            <input type="text" class=" rounded-lg outline-violet-300 w-full  " placeholder=" Enter slug ..." >
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="add_description" class="block mb-2 font-medium text-gray-600 "> Description</label>
                        <textarea type="text" id="add_description" name="description"  class=" rounded-lg  w-full" placeholder="Enter description ..." > </textarea>
                    </div>
                    <div class=" mt-5 p-6 pl-0 rounded-b border-gray-200">
                        <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="submit">Add Brand</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script>
        tinymce.init({
            height: 200,
            selector: '#add_description',
            menubar: false,
            statusbar:false,
            theme:'silver',
        });
    </script>
@endsection
