@extends('layouts.admin')

@section('title', 'ADMIN')

@section('content')
<div class="adminContainer clearfix">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo lavoratore come Staff</p>

    <div class="box">
        
            {{ Form::open(array('route' => 'newstaff.store', 'id' => 'addStaff', 'files' => true, 'class' => 'contact-form')) }}
            <div>
                {{ Form::label('name', 'Nome Staff', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('surname', 'Cognome Staff', ['class' => 'label-input']) }}
                {{ Form::text('surname','', ['class' => 'input','id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

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

        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
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
        
        {{ Form::label('birthday', 'Data di nascita') }}
        {{ Form::text('birthday', '', ['id' => 'birthday']) }}
        @if ($errors->first('birthday'))
        <ul class="errors">
            @foreach ($errors->get('birthday') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        {{ Form::label('role', 'Ruolo=staff') }}
        {{ Form::text('role','', ['id' => 'staff']) }}  
        
        {{ Form::label('residence', 'Luogo di residenza') }}
        {{ Form::text('residence', '', ['id' => 'residence']) }}
        @if ($errors->first('residence'))
        <ul class="errors">
            @foreach ($errors->get('residence') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        <div>                
            {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection

