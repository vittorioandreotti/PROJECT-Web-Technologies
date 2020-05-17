<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" > 
        <title>@yield('title', 'Home')</title> <!-- -->
        <!--<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>-->
    </head>
    <body>
        <header id="header">
            <a href="" class="headerLogo"><img src="{{asset('images/logoApp.png')}}" id="logo"></a>
             <div id="menu">@include('layouts/menuPublic')</div>
        </header>
        <div>
            @yield('content')
        </div>
        <footer id="footer">
            <a href="">
                 <p>Copyright: Iaco's Enterprise</p>
            </a>
            <a href="">
                <p>Vieni a trovarci!</p>
            </a>
        </footer>
    </body>
</html>
