@extends('layouts.public')
@section('title', 'Catalogo')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" > 
@endsection

@section('scripts')
@parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script> 
        $(function () {
                $('#insertProduct').on('click', function () {
                    window.location.href="{{route('newproduct')}}";
                })
            });
    </script>

@endsection

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
        <div>
            @if(Auth::guest() || Auth::user()->role=='user')
                @isset($selectedTopCategory)
                @isset($selectedSubCategory)
            {{ Form::open(array('route' =>['filterProduct.store',$selectedTopCategory->codCat,$selectedSubCategory->codCat], 'id' => 'editproduct')) }}
            {{ Form::text('search','',['class' => 'input', 'id' => 'search']) }}
            {{ Form::submit('Ricerca') }}
            {{ Form::close() }}
        @endisset
    @endisset
@endif

        @can('isStaff')
            <button id='insertProduct'>Inserisci prodotto</button>
        @endcan
        </div>
        <div id='containerProdotti'>
            @foreach($products as $product)
            <div id="containerProdotto">
                @include('helpers/productImg',['imgFile' => $product->image])
                <div class="info">
                    <a href="{{route('product',[$product->prodCat->codPar,$product->codCat,$product->codProd])}}"><h2 class="title">{{ $product->nome }}</h2></a>
                    <p class="price"> @include('helpers/productPriceCatalog') </p>
                    
                </div>
            </div>
            @endforeach
        </div>
        @include('pagination.paginator',['paginator' => $products])
    </div>
</div>
@endsection