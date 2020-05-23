@extends('layouts.public')
@section('title', 'Catalogo')

@section('content')
<div id="containerCatalogo">
    <div id="menuCatalogo">
        @include('layouts/menuCatalog')
    </div>
    <div id='contentCatalogo'>
        @isset($selectedTopCategories)
        <h2>{{$selectedTopCategories}}</h2>
        @endisset()
        <p id='totaleProdotti'>Totale prodotti: {{$products->total()}}</p>
        <div id='cerca'>
            <input type="text" placeholder="Cerca">
        </div>
        <div id='containerProdotti'>
            @foreach($products as $product)
            <div id="containerProdotto">
                <img src="{{ asset('images/products/' . $product->image) }}">
                <div class="info">
                    <h2 class="title">Prodotto: {{ $product->nome }}</h2>
                    <p class="price"> Prezzo: {{ number_format($product->prezzo,2,'.',',') }} € </p>
                </div>
            </div>
            @endforeach
        </div>
        @include('pagination.paginator',['paginator' => $products])
    </div>
</div>
@endsection