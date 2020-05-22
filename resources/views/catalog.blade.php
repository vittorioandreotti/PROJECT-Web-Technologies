@extends('layouts.public')
@section('title', 'Catalogo')

@section('content')
<div id="catalogoContainer">
    @isset($products)
    <div class="catalogoProdotti">
    <h2>RAM</h2>
    <span>Benvenuto nella sezione *Ram* di iPrice.<br> Scegli tra tantissimi prodotti in offerta e con consegna rapida.<br> Scopri la nostra ampia proposta, consulta i prezzi e acquista comodamente online.</span>
    <div>
        <input type="text" placeholder="Cerca">
    </div>
        @foreach ($products as $product)
        <div id="containerProdotti">
                        <div class="containerProdotto">
                            <img src="{{ asset('images/products/' . $product->image) }}">
                             <div class="info">
                                <h2 class="title">Prodotto: {{ $product->nome }}</h2>
                                <p class="meta">Prezzo: {{ $product->prezzo }}</p>
                             </div>
                        </div>
        @endforeach
        </div>
    </div>
    @endisset()

    <div id="sideMenuCatalogo">
        @include('layouts/menuCatalog')
    </div>
    
</div>
@endsection