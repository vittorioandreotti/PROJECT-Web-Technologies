@extends('layouts.staff')

@section('title', 'Inserisci prodotto')

@section('content')
<div class="containerCatalogo">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo prodotto nel Catalogo</p>

    <div id="formEditProfile">
        
            {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true)) }}
            <div class="wrapInput">
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'labelInput']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrapInput">
                {{ Form::label('codCat', 'Categoria', ['class' => 'labelInput']) }}
                {{ Form::select('codCat', $cats, '', ['class' => 'input','id' => 'codCat']) }}
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

            <div class="wrapInput">
                {{ Form::label('descCorta', 'Descrizione Breve', ['class' => 'labelInput']) }}
                {{ Form::text('descCorta', '', ['class' => 'input', 'id' => 'descCorta']) }}
                @if ($errors->first('descCorta'))
                <ul class="errors">
                    @foreach ($errors->get('descCorta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrapInput">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'labelInput']) }}
                {{ Form::text('prezzo', '', ['class' => 'input', 'id' => 'prezzo']) }}
                @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrapInput">
                {{ Form::label('percSconto', 'Sconto (%)', ['class' => 'labelInput']) }}
                {{ Form::text('percSconto', '', ['class' => 'input', 'id' => 'percSconto']) }}
                @if ($errors->first('percSconto'))
                <ul class="errors">
                    @foreach ($errors->get('percSconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="wrapInput">
                {{ Form::label('sconto', 'In Sconto', ['class' => 'labelInput']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'sconto']) }}
            </div>

            <div class="wrapInput">
                {{ Form::label('descLunga', 'Descrizione Estesa', ['class' => 'labelInput']) }}
                {{ Form::textarea('descLunga', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('descLunga'))
                <ul class="errors">
                    @foreach ($errors->get('descLunga') as $message)
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

</div>
@endsection


