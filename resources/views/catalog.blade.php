@extends('layouts.public')
@section('title', 'Catalogo')

@section('content')
<div id="containerCatalogo">
    <div id="menuCatalogo">
        @include('layouts/menuCatalog')
    </div>
    <div id='contentCatalogo'>
        <!--Cambia il titolo h2 della sezione al cliccare delle voci del menu del catalogo-->
        @if(@isset($selectedTopCategory))
            @if(@isset($selectedSubCategory))
                <h2>{{$selectedSubCategory->name}}</h2>
             @else(@isset($selectedTopCategory))
                <h2>{{$selectedTopCategory->name}}</h2> 
            @endif
        @else
            <h2>Tutti i prodotti</h2> 
        @endif

        <p id='totaleProdotti'>Totale prodotti: {{$products->total()}}</p>
        <div id='cerca'>
            <input type="text" placeholder="Cerca">
        </div>
        <div id='containerProdotti'>
            @foreach($products as $product)
            <div id="containerProdotto">
                <img src="{{ asset('images/products/' . $product->image) }}">
                <div class="info">
                    <a href="{{route('product',[$product->prodCat->codPar,$product->codCat,$product->codProd])}}"><h2 class="title">Prodotto: {{ $product->nome }}</h2></a>
                    <p class="price"> Prezzo: {{ number_format($product->prezzo,2,'.',',') }} € </p>
                    
                </div>
            </div>
            @endforeach
        </div>
        @include('pagination.paginator',['paginator' => $products])
    </div>
</div>
@endsection