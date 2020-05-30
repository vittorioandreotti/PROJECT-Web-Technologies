@extends('layouts.public')
@section('title', 'Prodotto')

@section('scripts')
@parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script> 
        $(function () {
                $('#editProduct').on('click', function () {
                    window.location.href="{{route('editproduct',[$selectedProduct->codProd])}}";
                })
            });
    </script>

@endsection

@section('content')
    <div id="menuCatalogo">
        @include('layouts/menuCatalog')
    </div>
<div id="product">
    @include('helpers/productImg',['imgFile' => $selectedProduct->image])
    <div class="infoWrapper">
        <div id="nome"><h1>{{$selectedProduct->nome}}</h1></div>
        <div id="categoria">Categoria: <b>{{$selectedTopCategory->name}}</b></div>
        <div id="sottocategoria">Sottocategoria: <b>{{$selectedSubCategory->name}}</b></div>
        <div id="prezzo"> @include('helpers/productPrice')</div>
    </div>
    <p id="descBreve"><h3>Descrizione breve</h3>{{$selectedProduct->descCorta}}</p>
    <p id="descEstesa"><h3>Descrizione estesa</h3>{{$selectedProduct->descLunga}}</p>
    <button id='editProduct'>Modifica</button>
</div>
@endsection