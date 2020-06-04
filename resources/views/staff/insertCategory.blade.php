@extends('layouts.staff')

@section('title', 'Inserisci Categorie')

@section('scripts')

@parent

@endsection

@section('content')
<div>  
<h3>Aggiungi Categoria</h3>
    <p>Utilizza questa form per inserire una nuova Categoria nel Catalogo</p>
     {{ Form::open(array('route' => 'insertCategory.store', 'id' => 'insertCategory')) }}
      <div class="wrapInput">
                {{ Form::label('name', 'Nome Categoria', ['class' => 'labelInput']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                
                {{ Form::label('desc', 'Descrizione', ['class' => 'labelInput']) }}
                {{ Form::text('desc', '', ['class' => 'input', 'id' => 'desc']) }}
                
                {{ Form::submit('Aggiungi Categoria', ['class' => 'submit']) }}
            </div>
     {{ Form::close() }}
</div>


<div> <h3>Aggiungi Sottocategoria</h3>
    <p>Utilizza questa form per inserire una nuova Sottocategoria nel Catalogo</p>  
     {{ Form::open(array('route' => 'insertSubCategory.store', 'id' => 'insertSubCategory')) }}
      <div class="wrapInput">
                {{ Form::label('name', 'Nome Sottocategoria', ['class' => 'labelInput']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                
                {{ Form::label('desc', 'Descrizione', ['class' => 'labelInput']) }}
                {{ Form::text('desc', '', ['class' => 'input', 'id' => 'desc']) }}
                
                {{ Form::label('codCat', 'Categoria', ['class' => 'labelInput']) }}
                {{ Form::select('codCat', $cats, '', ['class' => 'input','id' => 'codCat']) }}
                
                {{ Form::submit('Aggiungi Sottocategoria', ['class' => 'submit']) }}
                
            </div>
     {{ Form::close() }}
</div>

@endsection