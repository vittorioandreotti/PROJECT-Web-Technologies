<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @section('link')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" > 
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        @show
        
        @section('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        @show
        <title>@yield('title', 'Home')</title> <!-- -->
    </head>
    <body>
        <header id="header">
            <a href="{{route('home')}}" class="headerLogo"><img src="{{asset('img/logoApp.png')}}" id="logo"></a>
             <div id="menu">@include('layouts/menuPublic')</div>
        </header>
        <div id="container">
            @yield('content')
        </div>
        <footer id="footer">
            <span class="copyright"><a href="{{route('privacyPolicy')}}">Privacy Policy</a> | &copy; Copyright 2020 iPrice. Tutti i diritti sono riservati.</span>
        </footer>
    </body>
</html>
