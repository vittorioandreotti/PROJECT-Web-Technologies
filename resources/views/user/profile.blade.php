@extends('layouts.user')
@section('title', 'Profilo Personale')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" > 
@endsection

@section('scripts')
@parent
<script>
    $(function () {
        setTimeout(function(){
            $("#correct").fadeOut("slow");
            }, 5000);
    });
</script>
@endsection

@section('content')
<div id="profile" >
    <h1>Dati Personali</h1>
    <table>
        <tr><td><b>Nome</b></td><td>{{Auth::user()->name}}</td></tr>
        <tr><td><b>Cognome</b></td><td>{{Auth::user()->surname}}</td></tr>
        <tr><td><b>Email</b></td><td>{{Auth::user()->email}}</td></tr>
        <tr><td><b>Residenza</b></td><td>{{Auth::user()->residence}}</td></tr>
        <tr><td><b>Data di nascita</b></td>@include('helpers/convertDate',['date'=>Auth::user()->birthday])</tr>
        <tr><td><b>Occupazione</b></td><td>{{Auth::user()->job}}</td></tr>
    </table>
</div>

@endsection