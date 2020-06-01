@extends('layouts.staff')

@section('title', 'Modifica prodotto')
@section('scripts')

@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('editproduct.store',[$prod->codProd]) }}";
    var formId = 'editproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#editproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection


@section('content')
<div class="containerCatalogo">
    <h3>Modifica Prodotto</h3>
    <p>Utilizza questa form per modificare un prodotto nel catalogo</p>

    <div id="formEditProfile">
        
            {{ Form::open(array('route' =>['editproduct.store',$prod->codProd], 'id' => 'editproduct', 'files' => true)) }}
            <div class="wrapInput">
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'labelInput']) }}
                {{ Form::text('nome', $prod->nome, ['class' => 'input', 'id' => 'nome']) }}
               
            </div>

            <div class="wrapInput">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'labelInput']) }}
                {{ Form::text('prezzo', $prod->prezzo, ['class' => 'input', 'id' => 'prezzo']) }}
               
            </div>

            <div class="wrapInput">
                {{ Form::label('sconto', 'In Sconto', ['class' => 'labelInput']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'],$prod->sconto, ['class' => 'input','id' => 'sconto']) }}
            </div>
            
            <div class="wrapInput">
                {{ Form::label('percSconto', 'Sconto (%)', ['class' => 'labelInput']) }}
                {{ Form::text('percSconto', $prod->percSconto, ['class' => 'input', 'id' => 'percSconto']) }}
                
            </div>

              <div class="wrapInput">
                {{ Form::label('descCorta', 'Descrizione Breve', ['class' => 'labelInput']) }}
                {{ Form::textarea('descCorta', $prod->descCorta, ['class' => 'input', 'id' => 'descCorta']) }}
                
            </div>

            
            <div class="wrapInput">
                {{ Form::label('descLunga', 'Descrizione Estesa', ['class' => 'labelInput']) }}
                {{ Form::textarea('descLunga', $prod->descLunga, ['class' => 'input', 'id' => 'descLunga', 'rows' => 10, 'column'=> 20 ]) }}
                
            </div>
             <div class="wrapInput">
                  <div>@include('helpers/productImg',['imgFile' => $prod->image])</div>
                {{ Form::label('image', 'Immagine', ['class' => 'labelInput']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
               
            </div>
            <div>                
                {{ Form::submit('Modifica prodotto', ['class' => 'submit']) }}
            </div>
            
            {{ Form::close() }}
        </div>
 </div>
@endsection
