@extends('layouts.staff')

@section('title', 'Inserisci prodotto')

@section('content')
<div class="containerCatalogo">
    <h3>Modifica Prodotto</h3>
    <p>Utilizza questa form per modificare un prodotto nel catalogo</p>

    <div id="formEditProfile">
        
            {{ Form::open(array('route' => 'editproduct.store', 'id' => 'editproduct', 'files' => true)) }}
            <div class="wrapInput">
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'labelInput']) }}
                {{ Form::text('nome', $prod->nome, ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrapInput">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'labelInput']) }}
                {{ Form::text('prezzo', $prod->prezzo, ['class' => 'input', 'id' => 'prezzo']) }}
                @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrapInput">
                {{ Form::label('sconto', 'In Sconto', ['class' => 'labelInput']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'],$prod->sconto, ['class' => 'input','id' => 'sconto']) }}
            </div>
            
            <div class="wrapInput">
                {{ Form::label('percSconto', 'Sconto (%)', ['class' => 'labelInput']) }}
                {{ Form::text('percSconto', $prod->percSconto, ['class' => 'input', 'id' => 'percSconto']) }}
                @if ($errors->first('percSconto'))
                <ul class="errors">
                    @foreach ($errors->get('percSconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

              <div class="wrapInput">
                {{ Form::label('descCorta', 'Descrizione Breve', ['class' => 'labelInput']) }}
                {{ Form::textarea('descCorta', $prod->descCorta, ['class' => 'input', 'id' => 'descCorta']) }}
                @if ($errors->first('descCorta'))
                <ul class="errors">
                    @foreach ($errors->get('descCorta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            
            <div class="wrapInput">
                {{ Form::label('descLunga', 'Descrizione Estesa', ['class' => 'labelInput']) }}
                {{ Form::textarea('descLunga', $prod->descLunga, ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('descLunga'))
                <ul class="errors">
                    @foreach ($errors->get('descLunga') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
             <div class="wrapInput">
                {{ Form::label('image', 'Immagine', ['class' => 'labelInput']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div>                
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'submit']) }}
            </div>
            
            {{ Form::close() }}
        </div>
 </div>
@endsection
