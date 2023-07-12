<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="keywords" content="keywords">
    <meta name="description" content="description">
    <meta name="author" content="p-themes">

    <meta name="apple-mobile-web-app-title" content="JBMM">
    <meta name="application-name" content="JMBB">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="theme-color" content="#ffffff">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/img/jbmm_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/jbmm_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/jbmm_favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/jbmm_favicon.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    @include('libraries.frontend.styles')
    @livewireStyles
</head>

<body>

    <div class="page-wrapper">
        @include('components.frontend.header')

        <main class="main">
            @yield('content')
        </main>

        @include('components.frontend.footer')
    </div>

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    @include('components.frontend.mobile_and_modals')
    @include('libraries.frontend.scripts')
    @livewireScripts
</body>

</html>