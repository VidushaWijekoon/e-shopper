<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/img/jbmm_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/jbmm_favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/jbmm_favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/jbmm_favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    @include('libraries.admin.styles')
    @livewireStyles
</head>

<body>

    <div class="wrapper">
        @include('components.admin.sidebar')

        <div class="main">
            @include('components.admin.navbar')
            <div class="content">
                @yield('content')
            </div>
        </div>

    </div>
    @include('libraries.admin.scripts')
    @livewireScripts

</body>

</html>