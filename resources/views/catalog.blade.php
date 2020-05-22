@extends('layouts.public')
@section('title', 'Catalogo')

@section('content')
<div id="containerCatalogo">
    <div id="menuCatalogo">
        @include('layouts/menuCatalog')
    </div>
    <div id='contentCatalogo'>
        <h2>RAM</h2>
        <p id='totaleProdotti'>Totale prodotti: {{count($products)}}</p>
        <span>Benvenuto nella sezione *Ram* di iPrice.<br> Scegli tra tantissimi prodotti in offerta e con consegna rapida.<br> Scopri la nostra ampia proposta, consulta i prezzi e acquista comodamente online.</span>
        <div id='cerca'>
            <input type="text" placeholder="Cerca">
        </div>
        <div id='containerProdotti'>
            @foreach($products as $product)
            <div id="containerProdotto">
                <img src="{{ asset('images/products/' . $product->image) }}">
                <div class="info">
                    <h2 class="title">Prodotto: {{ $product->nome }}</h2>
                    <p class="price"> Prezzo: {{ $product->prezzo }} € </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection