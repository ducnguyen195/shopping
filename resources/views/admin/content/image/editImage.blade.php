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
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                                </path>
                            </svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Image</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Edit Image</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div>
                <h2 class="font-bold text-2xl"> Edit Image</h2>
            </div>
        </div>
        <div class="m-5 p-5 grid grid-cols-2  " >
            <form action="{{route('admin.update_image',[ $type,$image->id ])}}"  method="POST"  class="w-full   col-span-1 self-center  rounded-2xl  shadow-lg shadow-gray-200   bg-white " >
                @csrf
                <div class=" mt-5 gap-4 px-10 ">
                    <div class="">
                        <div class="" >
                            <label for="brand_name" class="block mb-2 font-medium text-gray-600"> Image Name </label>
                            <input type="text" id="brand_name" name="name" class=" rounded-lg outline-violet-300 w-full " value="{{ $image->name }}">
                        </div>
                        <div class=" mt-5">
                            <label for="model_type" class=" block mb-2 font-medium text-gray-600" > Model Type </label>
                            <select type="text" id="model_type" name="model_type" class=" rounded-lg outline-violet-300 w-full  " >
                                <option value="{{ $image->model_type }}">{{ $image->model_type }} </option>
                            </select>
                        </div>
                        <div class=" mt-5">
                            <label for="model_id" class=" block mb-2 font-medium text-gray-600" > Product Name </label>
                            <select type="text" id="model_id" name="model_id" class=" rounded-lg outline-violet-300 w-full " >
                                <option value="{{ $image->model_id }}"> {{ $image->products->name}} </option>
                            </select>
                        </div>
                        <div class=" mt-5  ">
                            <label for="path" class=" block mb-2 font-medium text-gray-600" > Path </label>
                            <div class="flex">
                                @php
                                    $image_path = json_decode($image->path);
                                 @endphp
                                    @if(is_array($image_path))
                                        @foreach($image_path as $item)
                                        <input type="text" id="image_label" name="path[]" class=" rounded-lg outline-violet-300 w-full " value="{{ $item }}" >
                                        @endforeach
                                    @else
                                        <p class="text-red-600"> Toang !!!</p>
                                    @endif
                                <div class="input-group-append">
                                    <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="button" id="button-image">
                                        Select
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="alt" class="block mb-2 font-medium text-gray-600 "> Alt</label>
                        <input type="text" id="alt" name="alt"  class=" rounded-lg  w-full" value="{{ $image->alt }}"  >
                    </div>
                    <div class=" mt-5 p-6 pl-0 rounded-b border-gray-200">
                        <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="submit">
                            Save Image
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- JS -->
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
        }
    </script>
@endsection
