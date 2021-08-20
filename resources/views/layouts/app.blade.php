<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{get_meta('sitename')}}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/turbolinks.js')}}"></script>
</head>
<body class="antialiased bg-white h-full flex flex-col">
<!-- HEADER START -->
<div id="header" class="bg-white border-b border-gray-100 py-5">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-2">
                <a class="text-gray-800 text-2xl font-bold" href="{{route('home')}}">
                    {{get_meta('sitename')}}
                </a>
            </div>
            <div class="col-span-10 flex gap-5">
                <ul class="list-none flex ml-auto">
                    <li class="mr-5"><a class="p-2 block" href="{{route('home')}}">Anasayfa</a></li>
                    <li><a class="p-2 block" href="/sayfa/hakkimda">Hakkımda</a></li>
                </ul>
                <a href="/sayfa/iletisim" class="bg-gray-800 text-white block py-2 px-5 rounded-sm font-bold">İletişim</a>
            </div>
        </div>
    </div>
</div>
<!-- HEADER END -->

@if(Request::is('/'))
<!-- HERO START -->
<div id="hero" class="py-20">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <!-- Title Start -->
        <h1 class="text-4xl font-bold text-gray-800">{{get_meta('sitedesc')}}</h1>
        <!-- Title End -->

        <!-- Desc Start -->
        <div class="desc mt-10 text-xl text-gray-700">{{get_meta('about')}}</div>
        <!-- Desc End -->

        <!-- Search Form Start -->
        <form action="{{route('search.index')}}" class="search-form flex gap-5 min-w-[500px] mt-10 border border-gray-200 rounded-md px-3 group">
            <input name="kelime" type="text" class="w-full outline-none h-[50px] placeholder-gray-600" placeholder="Yazılarda arama yap...">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </button>
        </form>
        <!-- Search Form End -->
    </div>
</div>
<!-- HERO END -->
@endif

<!-- MAIN START -->
<main id="main" class="mt-10">
    <div class="container mx-auto">
        @yield('content')
    </div>
</main>
<!-- MAIN END -->

<!-- FOOTER START -->
<footer id="footer" class="mt-auto py-5 border-t border-gray-100">
    <div class="container mx-auto text-center text-gray-500">
        {{get_meta('sitename')}} &copy; {{date('Y')}}. <a target="_blank" class="text-gray-600 font-semibold" href="{{env('RIGGS_GITHUB')}}">{{env('RIGGS_NAME')}} {{env('RIGGS_VERSION')}}</a> açık kaynak yazılımı ile oluşturulmuştur.
    </div>
</footer>
<!-- FOOTER END -->

</body>
</html>
