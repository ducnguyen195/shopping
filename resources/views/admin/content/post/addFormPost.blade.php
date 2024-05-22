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
                                    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Post</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">Add New Post</h1>
                </div>
            </div>
        </div>
        <div class="p-4 mx-4 mt-4 mb-4 bg-white rounded-2xl shadow-xl shadow-gray-200 lg:p-5  ">
         <form action="{{route('admin.store_post')}}" method="POST" class="w-full h-full" >
             @csrf
             <div class="grid grid-cols-2 border gap-6 p-3 rounded-2xl font-normal">
                 <div class="col-span-1">
                     <label for="category_id" class="block "> Post Category  </label>
                     <select name="category_id" id="category_id" class="rounded-lg w-full mt-3">
                         <option value=""> Select Category </option>
                         @foreach($category as $item)
                             <option value="{{$item->id}}">{{$item->name}}</option>
                         @endforeach
                     </select>
                 </div>
             </div>
             <div class="grid grid-cols-2 p-3 gap-x-6 border mt-5 rounded-2xl">
                 <div class="col-span-1">
                     <div class="mt-5">
                         <label for="post_name" class="block"> Name</label>
                         <input type="text" id="post_name" name="name" class="rounded-lg w-full mt-2" placeholder="Enter Post Name">
                     </div>
                     <div class="mt-5">
                         <label for="post_slug"> Slug</label>
                         <input type="text" id="post_slug" name="slug" class="rounded-lg w-full mt-2" placeholder="Enter Post Slug">
                     </div>
                     <div class="mt-5">
                         <label for="post_description" class="block mb-2" > Description</label>
                         <textarea type="text" id="post_description" name="description" class="rounded-lg w-full" placeholder="Enter Post Description"> </textarea>
                     </div>
                 </div>
                 <div class="col-span-1">
                     <div class="mt-5">
                         <label for="post_seo_title" class="block"> SEO Title</label>
                         <input type="text" id="post_seo_title" name="seo_title" class="rounded-lg w-full mt-2" placeholder="Enter Seo Title">
                     </div>
                     <div class="mt-5">
                         <label for="post_seo_keyword" class="block"> SEO Keyword</label>
                         <input type="text" id="post_seo_keyword" name="seo_keywords" class="rounded-lg w-full mt-2" placeholder="Enter Seo Keyword">
                     </div>
                     <div class="mt-5">
                         <label for="post_seo_description" class="block mb-2"> SEO Description</label>
                         <textarea type="text" id="post_seo_description" name="seo_description" class="rounded-lg w-full "  placeholder="Enter Seo Description"> </textarea>
                     </div>
                 </div>
             </div>
             <div class="mt-5 ">
                 <div class="p-3 border rounded-2xl ">
                     <label for="post_content" class="block mb-2"> Post Content</label>
                     <textarea name="content" id="post_content" class="w-full rounded-lg"> </textarea>
                 </div>
             </div>
             <div class=" mt-5 p-6 pl-0 rounded-b border-gray-200">
                 <button class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-violet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform" type="submit">
                     Add Post
                 </button>
             </div>
        </form>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: '#post_content',  // change this value according to your HTML
            statusbar: false,
            menu: {
                file: { title: 'File', items: 'newdocument restoredraft | preview | export print | deleteallconversations' },
                edit: { title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace' },
                view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments' },
                insert: { title: 'Insert', items: 'image link media addcomment pageembed template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime' },
                format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat' },
                tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | a11ycheck code wordcount' },
                table: { title: 'Table', items: 'inserttable | cell row column | advtablesort | tableprops deletetable' },
                help: { title: 'Help', items: 'help' }
            }
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
