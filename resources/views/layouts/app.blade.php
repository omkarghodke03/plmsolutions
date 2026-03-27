<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-Content-Type-Options" content="nosniff"> <!--Preloader meta tags one-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Preloader meta tags two-->
    <title>@yield('title', 'Milestone')</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
          

    <!--  Your CSS from resources/css/ -->
    <!--  Your js from resources/css/ -->
    @vite(['resources/css/custom.css','resources/css/sections.css', 'resources/css/cookie-consent.css','resources/css/contact.css','resources/css/aboutus.css'])
    @vite(['resources/js/custom.js ','resources/js/cookies.js','resources/js/cookie-consent.js'])
    @stack('styles')
    
</head>
<body>
    @include('partials.preloader')<!--Preloader-->
    @include('partials.header')   <!--header-->

    <main>
        @yield('content')
    </main>
    @include('partials.cookie-consent')<!-- cookies-->
    @include('partials.footer')  <!--footer-->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            defer></script>

    @stack('scripts')
</body>
</html>