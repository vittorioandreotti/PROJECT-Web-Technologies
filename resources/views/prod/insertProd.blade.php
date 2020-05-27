@extends('layouts.staff')

@section('title', 'STAFF')

@section('content')
<div class="adminContainer clearfix">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo prodotto nel Catalogo</p>

    <div class="box">
        
            {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}
            <div>
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'label-input']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('codCat', 'Categoria', ['class' => 'label-input']) }}
                {{ Form::select('codCat', $cats, '', ['class' => 'input','id' => 'codCat']) }}
            </div>

            <div>
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
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
                {{ Form::label('descCorta', 'Descrizione Breve', ['class' => 'label-input']) }}
                {{ Form::text('descCorta', '', ['class' => 'input', 'id' => 'descCorta']) }}
                @if ($errors->first('descCorta'))
                <ul class="errors">
                    @foreach ($errors->get('descCorta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                {{ Form::text('prezzo', '', ['class' => 'input', 'id' => 'prezzo']) }}
                @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('percSconto', 'Sconto (%)', ['class' => 'label-input']) }}
                {{ Form::text('percSconto', '', ['class' => 'input', 'id' => 'percSconto']) }}
                @if ($errors->first('percSconto'))
                <ul class="errors">
                    @foreach ($errors->get('percSconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('sconto', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'sconto']) }}
            </div>

            <div>
                {{ Form::label('descLunga', 'Descrizione Estesa', ['class' => 'label-input']) }}
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
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection


