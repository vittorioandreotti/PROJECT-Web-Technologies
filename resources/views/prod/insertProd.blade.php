@extends('layouts.staff')

@section('title', 'Inserisci prodotto')

@section('scripts')

@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('newproduct.store') }}";
    var formId = 'addproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div class="containerCatalogo">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo prodotto nel Catalogo</p>

    <div id="formEditProfile">
        
            {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true)) }}
            <div class="wrapInput">
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'labelInput']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                
            </div>

            <div class="wrapInput">
                {{ Form::label('codCat', 'Categoria', ['class' => 'labelInput']) }}
                {{ Form::select('codCat', $cats, '', ['class' => 'input','id' => 'codCat']) }}
            </div>

            <div class="wrapInput">
                {{ Form::label('image', 'Immagine', ['class' => 'labelInput']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                            </div>

            <div class="wrapInput">
                {{ Form::label('descCorta', 'Descrizione Breve', ['class' => 'labelInput']) }}
                {{ Form::text('descCorta', '', ['class' => 'input', 'id' => 'descCorta']) }}
                
            </div>

            <div class="wrapInput">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'labelInput']) }}
                {{ Form::text('prezzo', '', ['class' => 'input', 'id' => 'prezzo']) }}
                            </div>

            <div class="wrapInput">
                {{ Form::label('percSconto', 'Sconto (%)', ['class' => 'labelInput']) }}
                {{ Form::text('percSconto', '', ['class' => 'input', 'id' => 'percSconto']) }}
              
            </div>

            <div class="wrapInput">
                {{ Form::label('sconto', 'In Sconto', ['class' => 'labelInput']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'sconto']) }}
            </div>

            <div class="wrapInput">
                {{ Form::label('descLunga', 'Descrizione Estesa', ['class' => 'labelInput']) }}
                {{ Form::textarea('descLunga', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                            </div>
            
            <div>                
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'submit']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection


