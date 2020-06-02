<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @section('link')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" > 
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        @show
        
        @section('scripts')
        @show
        <title>@yield('title', 'Home User')</title>
    </head>
    <body>
        <header id="header">
            <a href="{{route('home')}}" class="headerLogo"><img src="{{asset('images/logoApp.png')}}" id="logo"></a>
             <div id="menu">@include('layouts/menuUser')</div>
        </header>

        <div id='container'>
            @yield('content')
        </div>
        <footer id="footer">
            <a href="{{route('privacyPolicy')}}">
                 Privacy Policy
            </a>
            <a href="{{ route('where') }}">
                <p>Vieni a trovarci!</p>
            </a>
        </footer>
    </body>
</html>
