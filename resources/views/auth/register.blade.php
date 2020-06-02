@extends('layouts.public')
@section('title', 'Registrazione')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}" > 
@endsection

@section('content')

@section('content')
<div class="containerRegistration">
    {{Form::open(array('route' => 'register', 'class'=>'registerForm'))}}
    <h1>Registrazione</h1>
    <h2>Dati Personali</h2>
    <div class="wrapInput">
        {{Form::label('name', 'Nome',['class'=>'labelInput'])}}
        {{Form::text('name', ''), ['class'=>'input','id' => 'name']}}
        @if ($errors->first('name'))
        <ul class="errors">
            @foreach ($errors->get('name') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="wrapInput">
        {{ Form::label('surname', 'Cognome',['class'=>'labelInput']) }}
        {{ Form::text('surname', '', ['class'=>'input','id' => 'surname']) }}
        @if ($errors->first('surname'))
        <ul class="errors">
            @foreach ($errors->get('surname') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="wrapInput">    
        {{ Form::label('email', 'Email',['class'=>'labelInput']) }}
        {{ Form::text('email', '', ['class'=>'input','id' => 'email']) }}
        @if ($errors->first('email'))
        <ul class="errors">
            @foreach ($errors->get('email') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
     <div class="wrapInput">
        {{ Form::label('job', 'Occupazione',['class'=>'labelInput']) }}
        {{ Form::select('job', $jobs,  ['id' => 'job']) }}
        @if ($errors->first('job'))
        <ul class="errors">
            @foreach ($errors->get('job') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="wrapInput">
        {{ Form::label('birthday', 'Data di nascita',['class'=>'labelInput']) }}
        {{ Form::date('birthday', '', ['class'=>'input','id' => 'birthday']) }}
        @if ($errors->first('birthday'))
        <ul class="errors">
            @foreach ($errors->get('birthday') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="wrapInput">
        {{ Form::label('residence', 'Luogo di residenza',['class'=>'labelInput']) }}
        {{ Form::text('residence', '', ['class'=>'input','id' => 'residence']) }}
        @if ($errors->first('residence'))
        <ul class="errors">
            @foreach ($errors->get('residence') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <h2>Dati Utente</h2>
     <div class="wrapInput">
        {{ Form::label('username', 'Username',['class'=>'labelInput']) }}
        {{ Form::text('username', '', ['class'=>'input','id' => 'username']) }}
        @if ($errors->first('username'))
        <ul class="errors">
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="wrapInput">
        {{ Form::label('password', 'Password',['class'=>'labelInput']) }}
        {{ Form::password('password', ['class'=>'input','id' => 'password']) }}
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="wrapInput">
        {{ Form::label('password-confirm', 'Conferma password',['class'=>'labelInput']) }}
        {{ Form::password('password_confirmation', ['class'=>'input','id' => 'password-confirm']) }}
    </div>
        {{ Form::submit('Registra') }}
        {{ Form::reset('Cancella') }}

        <p>Se hai già un account <a href="{{route("login")}}">Accedi</a></p>
        {{ Form::close() }}
</div>
@endsection
