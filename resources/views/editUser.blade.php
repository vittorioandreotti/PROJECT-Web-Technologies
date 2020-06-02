@extends('layouts.user')
@section('title', 'Profilo Personale')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/editUser.css') }}" > 
@endsection

@section('content')
<div id="editProfile">
    <h1>Modifica profilo</h1>

    {{ Form::open(array('route' => 'editProfile.store', 'id' => 'formEditProfile')) }}
                <div class="wrapInput">
                    {{ Form::label('name', 'Nome', ['class' => 'labelInput']) }}
                    {{ Form::text('name',auth()->user()->name, ['class' => 'input', 'id' => 'name']) }}
                      @if ($errors->first('name'))
                        <ul class="errors">
                            @foreach ($errors->get('name') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                      @endif
                </div>
                <div class="wrapInput">
                    {{ Form::label('surname', 'Cognome', ['class' => 'labelInput']) }}
                    {{ Form::text('surname', auth()->user()->surname, ['class' => 'input', 'id' => 'surname']) }}
                    @if ($errors->first('surname'))
                        <ul class="errors">
                            @foreach ($errors->get('surname') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="wrapInput">
                    {{ Form::label('email', 'Email', ['class' => 'labelInput']) }}
                    {{ Form::text('email', auth()->user()->email, ['class' => 'input', 'id' => 'email']) }}
                    @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="wrapInput">
                    {{ Form::label('residence', 'Residenza', ['class' => 'labelInput']) }}
                    {{ Form::text('residence', auth()->user()->residence, ['class' => 'input', 'id' => 'residence']) }}
                    @if ($errors->first('residence'))
                    <ul class="errors">
                        @foreach ($errors->get('residence') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="wrapInput">
                     {{ Form::label('birthday', 'Data di nascita', ['class' => 'labelInput']) }}
                    {{ Form::date('birthday', auth()->user()->birthday, ['class' => 'input', 'id' => 'birthday']) }}
                    @if ($errors->first('birthday'))
                    <ul class="errors">
                        @foreach ($errors->get('birthday') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="wrapInput">
                     {{ Form::label('job', 'Occupazione', ['class' => 'labelInput']) }}
                    {{ Form::select('job',$jobs, $job , ['class' => 'input', 'id' => 'job']) }}
                    @if ($errors->first('job'))
                    <ul class="errors">
                        @foreach ($errors->get('job') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                     
               
                <div>                
                    {{ Form::submit('Salva', ['class' => 'submit']) }}
                </div>
    {{ Form::close() }}
</div>
@endsection