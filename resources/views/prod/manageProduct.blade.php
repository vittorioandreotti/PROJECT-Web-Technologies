@extends('layouts.staff')

@section('title', 'Gestisci prodotti')

@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    $('#deleteproduct').hide(); /*Nasconde il bottone "Cancella Tutti" inizialmente*/
    $(':checkbox').on("change",(function(){
        if($(':checkbox:checked').length > 0) {
            $('#deleteproduct').show();
        } else {
            $('#deleteproduct').hide();
        }
    }));
});
</script>
@endsection

@section('content')
<h1>Gestisci prodotti</h1>
{{ Form::open(array('route' =>'manageproduct.store', 'id' => 'manageproduct')) }}
{{ Form::submit('Cancella tutti', ['class' => 'submit','id'=>'deleteproduct']) }}

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
                <a href="{{route('editproduct',$product->codProd)}}">Modifica</a>
                
            <td>
                {{ Form::open(array('route' =>['deleteproduct.store',$product->codProd], 'id' => 'deleteproduct')) }}
                {{ Form::submit('Cancella', ['class' => '']) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </table>
     @include('pagination.paginator',['paginator' => $products])
@endisset
{{ Form::close() }}
@endsection
