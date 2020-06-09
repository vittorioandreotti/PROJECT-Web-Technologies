@extends('layouts.staff')

@section('title', 'Cancella prodotto')

@section('link') 
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css') }}" >
@endsection

@section('content')
<div id="deleteProductWrapper">
    <div class="infoWrapper">
        <div id="nome"><h1>{{$product->nome}}</h1></div>
         @include('helpers/productImg',['imgFile' => $product->image])
         <div id="prezzo"><h3>Prezzo:</h3> @include('helpers/productPrice',['selectedProduct' => $product])</div>
    </div>
    <div id="categoria">Categoria: <b>{{$selectedTopCategory->name}}</b></div>
    <div id="sottocategoria">Sottocategoria: <b>{{$product->prodCat->name}}</b></div>
    <p id="descBreve"><h3>Descrizione breve</h3>{{$product->descCorta}}</p>
    <p id="descEstesa"><h3>Descrizione estesa</h3>{{$product->descLunga}}</p>
    <div class='confirmation'>Sei sicuro di voler cancellare il prodotto?
    {{ Form::open(array('route' =>['deleteproduct.store',$product->codProd], 'id' => 'deleteproduct')) }}
    {{ Form::submit('Conferma', ['class' => 'submit']) }}
     <button id='deleteProduct'class='cancel'>Annulla</button>
     </div>
    {{ Form::close() }}
   
</div>
@endsection
