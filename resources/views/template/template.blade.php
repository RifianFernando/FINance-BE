<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vite css -->
    @vite(['resources/css/app.css'])

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Title -->
    <title>FineAnce @yield('title')</title>

    <!-- Yield -->
    @yield('head')
</head>

<body>
    @include('template.navbar')
    @yield('body')
</body>

</html>
