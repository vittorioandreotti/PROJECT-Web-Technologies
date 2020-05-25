@extends('layouts.public')
@section('title', 'Prodotto')

@section('content')
<div id="product">
    <img src="{{asset('images/products/asus_tuf.jpg')}}">
    <div class="infoWrapper">
        <div id="nome">sdfdf</div>
        <div id="categoria">sdfdsf</div>
        <div id="sottocategoria">fdsf</div>
        <div id="prezzo">fdsf</div>
        <div id="prezzoScontato">fdsfds</div>
        <div id="Sconto">dsfdsfdfd</div>
    </div>
    <p id="descBreve">sdfsdfdsfds</p>
    <p id="descEstesa">sdfdsfsdfsd</p>
</div>
@endsection