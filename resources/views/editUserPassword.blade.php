@extends('layouts.user')
@section('title', 'Modifica password')

@section('content')

<div>
{{Form::open(array('route' => 'editPassword.store'))}}
    <div class="wrapInput"> 
    {{Form::label('password', 'Password Corrente',['class'=>'labelInput'])}}
    {{Form::text('password', ''),['class'=>'input','id' => 'password']}}
    @if ($errors->first('password'))
    <ul>
        @foreach ($errors->get('password') as $message)
        <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif
    </div>
    <div class="wrapInput"> 
    {{Form::label('newPassword', 'Nuova Password',['class'=>'labelInput'])}}
    {{Form::password('newPassword'),['class'=>'input','id' => 'newpassword']}}
    @if ($errors->first('password'))
    <ul>
        @foreach ($errors->get('password') as $message)
        <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif
    </div>
    <div class="wrapInput"> 
    {{Form::label('newPassword_confirm', 'Conferma Password',['class'=>'labelInput'])}}
    {{Form::password('newPassword_confirmation'),['class'=>'input','id' => 'currentPassword']}}    
    </div>
    
    {{ Form::submit('Modifica') }}
    {{Form::close()}}
</div>
@endsection