@extends('layouts.staff')

@section('title', 'Inserisci Categorie')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css') }}" >
@endsection

@section('scripts')
@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script>
    $(function () {
        var actionUrl = "{{ route('insertCategory.store') }}";
        var formId = 'insertCategory';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#insertCategory").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });
</script>
@endsection

@section('content')
<div class='insertCategory'>  
<h1>Aggiungi Categoria</h1>
    <p>Utilizza questa form per inserire una nuova Categoria nel Catalogo</p>
    <hr>
     {{ Form::open(array('route' => 'insertCategory.store', 'id' => 'insertCategory')) }}
      <div class="wrapInput">
                {{ Form::label('name', 'Nome Categoria', ['class' => 'labelInput']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
      </div>
     
      <div class="wrapInput">
                {{ Form::label('desc', 'Descrizione', ['class' => 'labelInput']) }}
                {{ Form::text('desc', '', ['class' => 'input', 'id' => 'desc']) }}
       </div>
        {{ Form::submit('Aggiungi Categoria', ['class' => 'submit']) }}
           
     {{ Form::close() }}
</div>
@endsection