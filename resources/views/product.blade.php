@extends('layouts.public')
@section('title', 'Prodotto')

@section('content')
    <div id="menuCatalogo">
        @include('layouts/menuCatalog')
    </div>
<div id="product">
    <img src="{{asset('images/products/asus_tuf.jpg')}}">
    <div class="infoWrapper">
        <div id="nome">{{$selectedProduct->nome}}</div>
        <div id="categoria">{{$selectedTopCategory->name}}</div>
        <div id="sottocategoria">{{$selectedSubCategory->name}}</div>
        <div id="prezzo">{{$selectedProduct->prezzo}}</div>
        <div id="prezzoScontato">{{$selectedProduct->getPrice()}}</div>
        <div id="Sconto">{{$selectedProduct->percSconto}}%</div>
    </div>
    <p id="descBreve">{{$selectedProduct->descCorta}}</p>
    <p id="descEstesa">{{$selectedProduct->descLunga}}</p>
</div>
@endsection