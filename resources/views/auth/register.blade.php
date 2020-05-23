@extends('layouts.public')
@section('title', 'Registrazione')

@section('content')

<div>
    <h3>Registrazione</h3>
    
    <div>
        {{Form::open(array('route' => 'register'))}}
        
        <div>
            {{Form::label('name', 'Nome')}}
            {{Form::text('name', ''), ['id' => 'name']}}
            @if ($errors->first('name'))
            <ul class="errors">
                @foreach ($errors->get('name') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
            
        </div>
            <div  class="wrap-input">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
        
            <div  class="wrap-input">
                {{ Form::label('job', 'Occupazione', ['class' => 'label-input']) }}
                {{ Form::password('job', ['class' => 'input', 'id' => 'job']) }}
                @if ($errors->first('job'))
                <ul class="errors">
                    @foreach ($errors->get('job') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        
            <div  class="wrap-input">
                {{ Form::label('dateOfBirth', 'Data di nascita', ['class' => 'label-input']) }}
                {{ Form::password('dateofBirth', ['class' => 'input', 'id' => 'dateOfBith']) }}
                @if ($errors->first('job'))
                <ul class="errors">
                    @foreach ($errors->get('dateOfBirth') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        
            <div  class="wrap-input">
                {{ Form::label('homeTown', 'Luogo di residenza', ['class' => 'label-input']) }}
                {{ Form::password('homeTown', ['class' => 'input', 'id' => 'homeTown']) }}
                @if ($errors->first('job'))
                <ul class="errors">
                    @foreach ($errors->get('homeTown') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>
@endsection
