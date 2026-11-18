<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>@yield('title', 'Milestone PLM solution')</title>
<meta name="description"  content="Milestone PLM Solutions offers end-to-end AEC Services and Engineering Design Services that enable global companies to streamline project execution,">
<meta name="robots" content="index, follow">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
          
    @vite([
    'resources/css/custom.css',
    'resources/css/sections.css',
    'resources/css/contact.css',
    'resources/css/aboutus.css',
    'resources/css/service/list-service.css',
    'resources/css/service/service.css',
    'resources/css/case-study/cs-page.css',
    'resources/css/case-study/cs-listing.css'
    
    ])

  @vite([
    'resources/js/custom.js',
    'resources/js/case-study.js'
    ])
    
    @stack('styles')
  
</head>
<body>
  
    @include('partials.header')   

    <main>
        @yield('content')
    </main>
   
    @include('partials.footer') 
    @include('partials.cookie-banner')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"  defer></script>

    @stack('scripts')

    
</body>
</html>