@extends('layouts.user')
@section('title', 'Modifica password')

@section('content')
<div id="containerChangePassword">
    <h2>Modifica Password</h2>
    @if(session()->has('confermPassword'))
        <ul class="success">
            {{ session()->get('confermPassword') }}
        </ul>
    @endif
    {{Form::open(array('route' => 'editPassword.store'))}}
        <div class="wrapInput"> 
        {{Form::label('password', 'Password Corrente',['class'=>'labelInput'])}}
        {{Form::password('password'),['class'=>'input','id' => 'password']}}
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
            <li>{{$message}}</li>
            @endforeach
        </ul>
        @endif
        </div>
        <div class="wrapInput"> 
        {{Form::label('newPassword', 'Nuova Password',['class'=>'labelInput'])}}
        {{Form::password('newPassword'),['class'=>'input','id' => 'newPassword']}}
        @if ($errors->first('newPassword'))
        <ul class="errors">
            @foreach ($errors->get('newPassword') as $message)
            <li>{{$message}}</li>
            @endforeach
        </ul>
        @endif
        </div>
        <div class="wrapInput"> 
        {{Form::label('newPasswordConfirm', 'Conferma Password',['class'=>'labelInput'])}}
        {{Form::password('newPasswordConfirm'),['class'=>'input','id' => 'newPasswordConfirm']}}
        @if ($errors->first('newPasswordConfirm'))
        <ul class="errors">
            @foreach ($errors->get('newPasswordConfirm') as $message)
            <li>{{$message}}</li>
            @endforeach
        </ul>
        @endif    
        </div>

        {{ Form::submit('Modifica',['class'=>"submit"]) }}
        {{Form::close()}}
</div>
@endsection