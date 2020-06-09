@extends('layouts.staff')

@section('title', 'Modifica prodotto')


@section('link') 
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css') }}" >
@endsection

@section('scripts')
@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('editproduct.store',[$prod->codProd]) }}";
    var formId = 'editproduct';
    if($('#sconto').val()=='0') {
        $('.wrapInputPerc').hide();
    }
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#editproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
        
    $('#sconto').on('change',function() {
        if($('#sconto').val()=='0') {
            $('.wrapInputPerc').hide();
        }    else {
            $('.wrapInputPerc').show();
            $('#percSconto').val('0');
        }
    });
    
    $('#image').change(function () {
            console.log($(this));
            if ($(this)[0].files && $(this)[0].files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    console.log(reader);
                    $('#newImage')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL($(this)[0].files[0]);
            }
        });
});
</script>


@endsection


@section('content')
<div id="formEditProduct">
    <h3>Modifica Prodotto</h3>
    <p>Utilizza questa form per modificare un prodotto nel catalogo</p>

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
            
            <div class="wrapInputPerc">
                {{ Form::label('percSconto', 'Sconto (%)', ['class' => 'labelInput']) }}
                {{ Form::text('percSconto', $prod->percSconto, ['class' => 'input', 'id' => 'percSconto']) }}
                
            </div>
                  

              <div class="wrapInput">
                {{ Form::label('descCorta', 'Descrizione Breve', ['class' => 'labelInput']) }}
                {{ Form::textarea('descCorta', $prod->descCorta, ['class' => 'input', 'id' => 'descCorta']) }}
                
            </div>
            

            
            <div class="wrapInput">
                {{ Form::label('descLunga', 'Descrizione Estesa', ['class' => 'labelInput']) }}
                {{ Form::textarea('descLunga', $prod->descLunga, ['class' => 'input', 'id' => 'descLunga', 'rows' => 20, 'column'=> 250,'style'=>'resize:none' ]) }}
                
            </div>
               
            <div class="wrapInput">
                {{ Form::label('image', 'Immagine', ['class' => 'labelInput']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                  <img id='newImage'>
             </div>  
            
            <div>                
                {{ Form::submit('Modifica prodotto', ['class' => 'submit']) }}
            </div>
            
            {{ Form::close() }}
        
 </div>
@endsection
