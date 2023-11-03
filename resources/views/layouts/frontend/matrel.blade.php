<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- File Css  --}}
    @include('layouts.frontend.head')
</head>

<body>
    @include('layouts.frontend.preloader')
    {{-- @include('layouts.frontend.header') --}}
    @yield('content')

    {{-- @include('layouts.frontend.footer') --}}

    @include('layouts.frontend.script')
</body>

</html>
