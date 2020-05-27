@extends('layouts.public')
@section('title', 'Registrazione')

@section('content')

<div class="container spazio clearfix">
    <div class="box">
        <h1>Registrazione</h1>

        {{Form::open(array('route' => 'register'))}}

        {{Form::label('name', 'Nome')}}
        {{Form::text('name', ''), ['id' => 'name']}}
        @if ($errors->first('name'))
        <ul class="errors">
            @foreach ($errors->get('name') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('surname', 'Cognome') }}
        {{ Form::text('surname', '', ['id' => 'surname']) }}
        @if ($errors->first('surname'))
        <ul class="errors">
            @foreach ($errors->get('surname') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', '', ['id' => 'username']) }}
        @if ($errors->first('username'))
        <ul class="errors">
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', '', ['id' => 'email']) }}
        @if ($errors->first('email'))
        <ul class="errors">
            @foreach ($errors->get('email') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['id' => 'password']) }}
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('password-confirm', 'Conferma password') }}
        {{ Form::password('password_confirmation', ['id' => 'password-confirm']) }}

        {{ Form::label('job', 'Occupazione') }}
        {{ Form::text('job', '',  ['id' => 'job']) }}
        @if ($errors->first('job'))
        <ul class="errors">
            @foreach ($errors->get('job') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{ Form::label('dateOfBirth', 'Data di nascita') }}
        {{ Form::text('dateofBirth', '', ['id' => 'dateOfBith']) }}
        @if ($errors->first('dateOfBirth'))
        <ul class="errors">
            @foreach ($errors->get('dateOfBirth') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::label('homeTown', 'Luogo di residenza') }}
        {{ Form::text('homeTown', '', ['id' => 'homeTown']) }}
        @if ($errors->first('homeTown'))
        <ul class="errors">
            @foreach ($errors->get('homeTown') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        {{ Form::submit('Registra') }}

        <p>Se hai già un account <a href="{{route("login")}}">Accedi</a></p>
        {{ Form::close() }}
    </div>
</div>
@endsection
