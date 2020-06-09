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
        $("#insertCategory :input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#insertCategory").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
         var actionUrl2 = "{{ route('insertSubCategory.store') }}";
        var formId2 = 'insertSubCategory';
        $("#insertSubCategory :input").on('blur', function (event) {
            var formElementId2 = $(this).attr('id');
            doElemValidation(formElementId2, actionUrl2, formId2);
        });
        $("#insertSubCategory").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl2, formId2);
        });
    });
</script>
@endsection

@section('content')
<div class='insertCategory'>  
<h3>Aggiungi Categoria</h3>
    <p>Utilizza questa form per inserire una nuova Categoria nel Catalogo</p>
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


<div class='insertCategory'> <h3>Aggiungi Sottocategoria</h3>
    <p>Utilizza questa form per inserire una nuova Sottocategoria nel Catalogo</p>  
     {{ Form::open(array('route' => 'insertSubCategory.store', 'id' => 'insertSubCategory')) }}
      <div class="wrapInput">
                {{ Form::label('name', 'Nome Sottocategoria', ['class' => 'labelInput']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
      </div>
      <div class="wrapInput">         
                {{ Form::label('desc', 'Descrizione', ['class' => 'labelInput']) }}
                {{ Form::text('desc', '', ['class' => 'input', 'id' => 'desc']) }}
      </div>        
      <div class="wrapInput">         
                {{ Form::label('codCat', 'Categoria', ['class' => 'labelInput']) }}
                {{ Form::select('codCat', $cats, '', ['class' => 'input','id' => 'codCat']) }}
      </div>        
                {{ Form::submit('Aggiungi Sottocategoria', ['class' => 'submit']) }}
                
           
     {{ Form::close() }}
</div>


@endsection