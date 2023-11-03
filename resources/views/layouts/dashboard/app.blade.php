<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FILE head Html-->
    @include('layouts.dashboard.head')

</head>

@if (app()->getLocale() == 'en')
    <body class="vertical light ">
    @else
        <body class="vertical light rtl">
@endif
        <div class="wrapper vh-100">
            @include('layouts.dashboard.navbar')
                @include('layouts.dashboard.aside')
            @yield('content')
        </div>
    @include('layouts.dashboard.script')
    {{-- Sweetalret2 install laravel --}}
    @include('vendor.sweetalert.alert')
</body>

</html>
