@extends('layouts.user')
@section('title', 'Profilo Personale')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" > 
@endsection

@section('content')
<div id="profile" >
    <h1>Dati Personali</h1>
    <table>
        <tr><td><b>Nome</b></td><td>{{Auth::user()->name}}</td></tr>
        <tr><td><b>Cognome</b></td><td>{{Auth::user()->surname}}</td></tr>
        <tr><td><b>Email</b></td><td>{{Auth::user()->email}}</td></tr>
        <tr><td><b>Residenza</b></td><td>{{Auth::user()->residence}}</td></tr>
        @include('helpers/convertDate',['date'=>Auth::user()->birthday])
        <tr><td><b>Occupazione</b></td><td>{{Auth::user()->job}}</td></tr>
    </table>
    <!--<h1>Dati Personali</h1>
    <span style="float:left;">Nome:{{Auth::user()->name}}</span>
    <span>Cognome:{{Auth::user()->surname }}</span>
    <span>Email:{{Auth::user()->email}}</span>
    <span>Residenza:{{Auth::user()->homeTown}}</span>
    <span>Data di nascita:{{Auth::user()->birthday}}</span>
    <span>Occupazione:{{Auth::user()->job}}</span>-->

</div>

@endsection