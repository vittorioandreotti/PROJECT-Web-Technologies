@extends('layouts.user')
@section('title', 'Modifica password')

@section('content')

<div>
{{Form::open(array('route' => 'editPassword.store'))}}
    
    {{Form::label('currentPassword', 'Password Corrente')}}
    {{Form::text('password', '')}}
    @if ($errors->first('currentPassword'))
    <ul>
        @foreach ($errors->get('currentPassword') as $message)
        <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif
    
    {{Form::label('newPassword', 'Nuova Password')}}
    {{Form::password('password')}}
    @if ($errors->first('newPassword'))
    <ul>
        @foreach ($errors->get('newPassword') as $message)
        <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif
    
    {{Form::label('newPassword_confirm', 'Conferma Password')}}
    {{Form::password('password_confirmation')}}
    @if ($errors->first('currentPassword'))
    <ul>
        @foreach ($errors->get('surname') as $message)
        <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif
    
    {{ Form::submit('Modifica') }}
{{Form::close()}}
</div>
@endsection