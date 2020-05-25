@extends('layouts.public')
@section('title', 'Prodotto')

@section('content')
    <div id="menuCatalogo">
        @include('layouts/menuCatalog')
    </div>
<div id="product">
    <img src="{{asset('images/products/'. $selectedProduct->image)}}">
    <div class="infoWrapper">
        <div id="nome"><h1>{{$selectedProduct->nome}}</h1></div>
        <div id="categoria">Categoria: <b>{{$selectedTopCategory->name}}</b></div>
        <div id="sottocategoria">Sottocategoria: <b>{{$selectedSubCategory->name}}</b></div>
        <div id="prezzo"> @include('helpers/productPrice')</div>
    </div>
    <p id="descBreve"><h3>Descrizione breve</h3>{{$selectedProduct->descCorta}}</p>
    <p id="descEstesa"><h3>Descrizione estesa</h3>{{$selectedProduct->descLunga}}</p>
</div>
@endsection