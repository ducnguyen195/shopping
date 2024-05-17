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
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                                    </path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Category</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">All Category</h1>
                <div class="block items-center sm:flex md:divide-x md:divide-gray-100">
                    <div class="flex items-center w-full sm:justify-end">
                        <a href="{{route('admin.add_category')}}">
                            <button type="button" data-modal-target="add-brand-modal" data-modal-toggle="add-brand-modal" class="inline-flex items-center py-2 px-3
                            text-sm font-medium text-center text-white rounded-lg bg-gradient-to-br from-pink-500 to-violet-700 sm:ml-auto shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                                <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add Category
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col my-6 mx-4 rounded-2xl shadow-xl shadow-gray-200">
        <div class="overflow-x-auto rounded-2xl">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="bg-white">
                        <tr>
                            <th scope="col" class="p-4 lg:p-5">
                               STT
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                 Name
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Slug
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Parent_Id
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Icon Path
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                                Model Type
                            </th>
                            <th scope="col" class="p-4 lg:p-5">
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($category as $item)
                        <tr class="hover:bg-gray-100">
                            <td class="p-4 w-4 lg:p-5 ">
                                {{$loop->index+1}}
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                <div class="text-sm font-normal text-gray-500">
                                    <div class="text-base font-semibold text-gray-900">{{$item->name}}</div>
                                </div>
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900  overflow-hidden whitespace-nowrap overflow-ellipsis w-[200px] lg:p-5">{!! $item -> slug !!}</td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">{{$item -> parent_id}}</td>
                            <td class="p-4 text-base font-normal text-gray-900 overflow-hidden whitespace-nowrap overflow-ellipsis lg:p-5">{{$item ->icon_path}}</td>
                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap lg:p-5">{{$item ->model_type}}</td>
                            <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                                <a href="{{route('admin.edit_category',$item ->id)}}">
                                    <button type="button" data-modal-target="edit-brand-modal" data-modal-toggle="edit-brand-modal" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 hover:text-gray-900 hover:scale-[1.02] transition-all">
                                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                        Edit brand
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" data-modal-target="delete-brand-modal-{{$item->id}}" data-modal-toggle="delete-brand-modal-{{$item->id}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-red-500 to-red-600 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        Delete user
                                    </button>
                                </a>
                            </td>
                        </tr>
                    {{--   Modal delete--}}
                        <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="delete-brand-modal-{{$item->id}}" aria-hidden="true">
                            <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                <div class="relative bg-white rounded-2xl shadow-lg">
                                    <div class="flex justify-end p-2">
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="delete-brand-modal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-6 pt-0 text-center">
                                        <svg class="mx-auto w-20 h-20 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Are you sure you want to delete this brand ?</h3>
                                        <a href="{{route('admin.destroy_category',$item->id)}}" class="text-white bg-gradient-to-br from-red-400 to-red-600 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                                            Yes, I'm sure
                                        </a>
                                        <a href="#" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center hover:scale-[1.02] transition-transform" data-modal-toggle="delete-brand-modal-{{$item->id}}">
                                            No, cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="items-center p-4 my-4 mx-4 bg-white rounded-2xl shadow-xl shadow-gray-200 sm:flex sm:justify-between">
        <div class="flex items-center mb-4 sm:mb-0">
            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </a>
            <span class="text-sm font-normal text-gray-500">
                Showing
                <span class="font-semibold text-gray-900">
                    1-20
                </span>
                of
                <span class="font-semibold text-gray-900">
                    1000
                </span>
            </span>
        </div>
        <div class="flex items-center space-x-3">
            <a href="#" class="inline-flex flex-1 justify-center items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-dark-700 to-dark-900 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                <svg class="mr-1 -ml-1 w-5 h-5"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Previous
            </a>
            <a href="#" class="inline-flex flex-1 justify-center items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-dark-700 to-dark-900 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                Next
                <svg class="ml-1 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
