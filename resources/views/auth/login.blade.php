@extends('layouts.public')

@section('title', 'Accesso')

@section('content')
<div class="container spazio clearfix">
    <div class="box">
            <h1>Login</h1>
            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
                  
            {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
            
            {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
            
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
    
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

            
                          
                {{ Form::submit('Login', ['class' => 'form-btn1']) }}
            
            
                <p> Se non hai già un account <a  href="">registrati</a></p>   
            {{ Form::close() }}
    </div>

</div>
@endsection
