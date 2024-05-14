<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon-fruit.png')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>Hala Fruit Administrator</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-flowbite-pro">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-flowbite-pro/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-flowbite-pro/nucleo-svg.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-flowbite-pro/app.css">
    <script src="https://cdn.tiny.cloud/1/mk69788v7tsx0cmwwr9lyp9a26e4onnb5s9m9uk9bc4m40az/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    @vite('resources/css/app.css')
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141734189-6');
    </script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-THQTXJ7');
    </script>
</head>
<body class="bg-gray-50">
@include('partial.admin.navbar')
<div class="flex overflow-hidden bg-white pt-16">
    @include('partial.admin.sideBar')
    <div class="hidden fixed inset-0 z-10 bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
        <main>
            @yield('content')
        </main>
        @include('partial.admin.footer')
    </div>
</div>
<script src="https://demos.creative-tim.com/soft-ui-flowbite-pro/app.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
