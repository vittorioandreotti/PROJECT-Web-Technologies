@extends('layouts.staff')

@section('title', 'Cancella prodotto')

@section('content')
<div id="product">
    @include('helpers/productImg',['imgFile' => $product->image])
    <div class="infoWrapper">
        <div id="nome"><h1>{{$product->nome}}</h1></div>
        <div id="prezzo"> @include('helpers/productPrice',['selectedProduct' => $product])</div>
    </div>
    <div id="categoria">Categoria: <b>{{$selectedTopCategory->name}}</b></div>
    <div id="sottocategoria">Sottocategoria: <b>{{$product->prodCat->name}}</b></div>
    <p id="descBreve"><h3>Descrizione breve</h3>{{$product->descCorta}}</p>
    <p id="descEstesa"><h3>Descrizione estesa</h3>{{$product->descLunga}}</p>
    <div>Sei sicuro di voler cancellare il prodotto?</div>
    {{ Form::open(array('route' =>['deleteproduct.store',$product->codProd], 'id' => 'deleteproduct')) }}
    {{ Form::submit('Conferma', ['class' => 'submit']) }}
    {{ Form::close() }}
    <button id='deleteProduct'>Annulla</button>
</div>
@endsection
