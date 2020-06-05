@extends('layouts.user')
@section('title', 'Modifica password')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/changePassword.css') }}" > 
@endsection

@section('content')
<div id="containerChangePassword">
        <h2>Modifica Password</h2>
        <hr>
        @if(session()->has('confermPassword'))
            <ul id="correct" class="success">
                <li>{{ session()->get('confermPassword') }}</li>
            </ul>
        @endif
        {{Form::open(array('route' => 'editPassword.store'))}}
            <div class="wrapInput"> 
            {{Form::label('password', 'Password Corrente',['class'=>'labelInput'])}}
            {{Form::password('password'),['class'=>'input','id' => 'password']}}
            </div>
            @if ($errors->first('password'))
            <ul id="errors" class="errors">
                @foreach ($errors->get('password') as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
            @endif
            <div class="wrapInput"> 
            {{Form::label('newPassword', 'Nuova Password',['class'=>'labelInput'])}}
            {{Form::password('newPassword'),['class'=>'input','id' => 'newPassword']}}
            </div>
            @if ($errors->first('newPassword'))
            <ul id="errors" class="errors">
                @foreach ($errors->get('newPassword') as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
            @endif
            <div class="wrapInput"> 
            {{Form::label('newPasswordConfirm', 'Conferma Password',['class'=>'labelInput'])}}
            {{Form::password('newPasswordConfirm'),['class'=>'input','id' => 'newPasswordConfirm']}}
            </div>
            @if ($errors->first('newPasswordConfirm'))
            <ul id="errors" class="errors">
                @foreach ($errors->get('newPasswordConfirm') as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
            @endif    


            {{ Form::submit('Modifica password',['class'=>"submitPassword"]) }}
            {{Form::close()}}
</div>
@endsection