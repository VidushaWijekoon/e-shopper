<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="JBMM International E-Commerce" />
    <meta name="author" content="JBMM International E-Commerce" />
    <meta name="keywords" content="JBMM International E-Commerce" />
    <meta name="apple-mobile-web-app-title" content="JBMM International E-Commerce">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">


    @include('libraries.frontend.styles')
    @livewireStyles
</head>

<body>

    <div class="page-wrapper">
        <header class="header header-12">
            @include('components.frontend.header-middle')
            @include('components.frontend.header-bottom')
        </header>

        <main class="main">
            @yield('content')
        </main>
        @include('components.frontend.footer')
    </div>

    @include('libraries.frontend.scripts')
    @livewireScripts
</body>

</html>
