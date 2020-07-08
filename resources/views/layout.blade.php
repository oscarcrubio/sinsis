<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        {{-- <link rel="canonical" href="https://www.example.com/{{LaravelLocalization::getCurrentLocale()}}@yield('canon')"/> --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/png" href="{{asset('images/icons/favicon.png')}}">

        {{-- @if(env('APP_LIVE')==="local")
        <!--Local-->
        <meta name="robots" content="noindex" />
        @else
        <!--Production-->
        <meta http-equiv=“Content-Security-Policy” content=“upgrade-insecure-requests”>
        @endif --}}

        @yield('meta')
        @include('maincss')
        @yield('css')
        <?php $route = Route::currentRouteName() ?>
</head>
    <body data-lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <div id="preloader">
            <div id="logostatus">
                <img src="/images/logos/logo-gova.svg" alt="Logotipo Govacasa">
            </div>
            <div id="status">&nbsp;</div>
        </div>
        @include('components.header')
        @yield('body')
        @include('components.footer')
        @include('mainjs')        
        <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
        @yield('own-js')
        @stack('scripts')      
    </body>
</html>
