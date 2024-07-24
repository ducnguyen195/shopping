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
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Add Image</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div>
                <h2 class="font-bold text-2xl"> Add new {{$type}} image</h2>
            </div>
        </div>
        <div class="m-5 p-5 grid grid-cols-2  " >
            <form action="{{route('admin.store_image',$type)}}"  method="POST"  class="w-full   col-span-1 self-center  rounded-2xl  shadow-lg shadow-gray-200   bg-white " >
                @csrf
                <div class=" mt-5 gap-4 px-10 ">
                    <div class="">
                        <div class="" >
                            <label for="brand_name" class="block mb-2 font-medium text-gray-600"> Name</label>
                            <input type="text" id="brand_name" name="name" class=" rounded-lg outline-violet-300 w-full ">
                        </div>
                        <div class=" mt-5">
                            <label for="model_type" class=" block mb-2 font-medium text-gray-600" > Model Type </label>
                            <select type="text" id="model_type" name="model_type" class=" rounded-lg outline-violet-300 w-full  " >
                                <option value="{{$type}}">{{$type}} </option>
                            </select>
                        </div>
                        <div class=" mt-5">
                            <label for="model_id" class=" block mb-2 font-medium text-gray-600" > Product Name </label>
                            <select type="text" id="model_id" name="model_id" class=" rounded-lg outline-violet-300 w-full " >
                                <option value="0"> Select product</option>
                                @foreach( $item as $detail )
                                    <option value="{{ $detail->id }}">{{ $detail->name }} </option>
                                @endforeach

                            </select>
                        </div>
                        <div class=" mt-5  ">
                            <label for="path" class=" block mb-2 font-medium text-gray-600" > Path </label>
                            <div class="flex">
                                <input type="text" id="image_label" data-input="image_label" name="path[]" class=" rounded-lg outline-violet-300 w-full " >
                                <div class="input-group-append">
                                    <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                                            type="button" id="button-image" data-input="image_label">
                                        Select
                                    </button>
                                </div>
                            </div>

                            <div class="flex mt-3">
                                <input type="text" id="image_label-1" data-input="image_label-1" name="path[]" class=" rounded-lg outline-violet-300 w-full " >
                                <div class="input-group-append">
                                    <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                                            type="button" id="button-image-1" data-input="image_label-1">
                                        Select
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-3">
                            <input type="text" id="image_label-2" name="path[]" data-input="image_label-2" class=" rounded-lg outline-violet-300 w-full " >
                            <div class="input-group-append">
                                <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                                        type="button" id="button-image-2" data-input="image_label-2">
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="alt" class="block mb-2 font-medium text-gray-600 "> Alt</label>
                        <input type="text" id="alt" name="alt"  class=" rounded-lg  w-full"  >
                    </div>
                    <div class=" mt-5 p-6 pl-0 rounded-b border-gray-200">
                        <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="submit">
                            Add Image
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- JS -->
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     document.getElementById('button-image').addEventListener('click', (event) => {
        //         event.preventDefault();
        //         window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        //     });
        //
        //     document.getElementById('button-image-1').addEventListener('click', (event) => {
        //         event.preventDefault();
        //         window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        //     });
        //
        //     document.getElementById('button-image-2').addEventListener('click', (event) => {
        //         event.preventDefault();
        //         window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        //     });
        //
        // });
        //
        // // set file link
        // function fmSetLink($url) {
        //     // cấu hình link
        //     document.getElementById('input_label').value = $url;
        // }
        //


        document.addEventListener("DOMContentLoaded", function() {
            // Set up event listeners for all buttons
            ['button-image', 'button-image-1', 'button-image-2'].forEach(buttonId => {
                document.getElementById(buttonId).addEventListener('click', (event) => {
                    event.preventDefault();
                    const inputId = event.currentTarget.getAttribute('data-input');
                    window.open(`/file-manager/fm-button?inputId=${inputId}`, 'fm', 'width=1400,height=800');
                });
            });
        });

        function fmSetLink(url, inputId) {
            document.getElementById(`${inputId}`).value = url;
        }
    </script>
@endsection
