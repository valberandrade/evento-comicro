<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- SEO -->
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="description" content="@yield('meta_description')" />
    <link rel="canonical" href="@yield('site_url')" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta property="og:url" content="@yield('site_url')" />
    <meta property="og:site_name" content="@yield('title')" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.jConveyorTicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quero-expor.css') }}" rel="stylesheet">
    <link href="{{ asset('img/icone-comicro-2.jpg') }}" rel="icon">
</head>
<body>
    @include('front.layouts._partials.header')

    <main>
        @yield('content')
    </main>

    @include('front.layouts._partials.footer')

</body>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('aos/aos.js') }}"></script>
<script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/loopcounter.js') }}"></script>
<script src="{{ asset('js/jquery.jConveyorTicker.min.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
