@extends('layouts.staff')

@section('title', 'Gestisci prodotti')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css') }}" >
@endsection


@section('scripts')
@parent
<script src="{{asset('js/showHideDeleteAllButton.js')}}"></script>
<script>
    $(function() {
        $("#newproduct").on('click',function() {
            window.location.href="{{route('newproduct')}}";
        })
    })
</script>
@endsection

@section('content')
<h1>Gestisci prodotti</h1>
<button id="newproduct" class="button">Inserisci prodotto</button>
{{ Form::open(array('route' =>'manageproduct.store', 'id' => 'manageproduct')) }}
{{ Form::submit('Cancella tutti', ['class' => 'cancel','id'=>'multipleDelete']) }}
@isset($products)
    <table border class="table"> 
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Sottocategoria</th>
            <th>Prezzo</th>
            <th>Percentuale sconto</th>
            <th>Descrizione breve</th>
            <th>Descrizione lunga</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{Form::checkbox('products[]',$product->codProd)}}</td>
            <td>{{$product->nome}}</td>
            <td>{{$product->getTopCatName()->name}}</td>
            <td>{{$product->prodCat->name}}</td>
            <td>{{number_format($product->prezzo,2,',','.')}}€</td>
            <td>{{$product->percSconto}}%</td>
            <td>{{$product->descCorta}}</td>
            <td id="descLunga">{{$product->descLunga}}</td>
            <td>
                <a id='edit' href="{{route('editproduct',$product->codProd)}}">Modifica</a>
            </td>
           
            <td>
                 {{ Form::open(array('route' =>['deleteproduct.store',$product->codProd], 'id' => 'deleteproduct')) }}
                {{ Form::submit('Cancella', ['class' => 'cancel','id'=>'delete']) }}
                 {{ Form::close() }}
            </td>
                          
        </tr>
        @endforeach
    </table>
    @include('pagination.paginator',['paginator' => $products])
@endisset
{{ Form::close() }}

@endsection
