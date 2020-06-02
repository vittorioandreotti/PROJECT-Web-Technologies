@extends('layouts.user')
@section('title', 'Profilo Personale')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/editUser.css') }}" > 
@endsection

@section('content')
<div id="editProfile">
    <h1>Modifica profilo</h1>
<!--   <form id="formEditProfile" name="editProfile"  method="post" action="{{route('editProfile.store')}}">
                    @csrf
                    <div  class="wrapInput">
                        <label class="labelInput" for="name">Nome </label>
                        <input class="input" type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                        @if ($errors->first('name'))
                        <ul class="errors">
                            @foreach ($errors->get('name') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="surname">Cognome </label>
                        <input class="input" type="text" name="surname" id="surname" value="{{ Auth::user()->surname }}">
                        @if ($errors->first('surname'))
                        <ul class="errors">
                            @foreach ($errors->get('surname') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="email">Email </label>
                        <input class="input" type="text" name="email" id="email" value="{{ Auth::user()->email }}">
                        @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="residence">Residenza </label>
                        <input class="input" type="text" name="residence" id="residence" value="{{ Auth::user()->residence }}">
                        @if ($errors->first('residence'))
                        <ul class="errors">
                            @foreach ($errors->get('residence') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="birthday">Data di nascita </label>
                        <input class="input" type="date" name="birthday" id="birthday" value="{{Auth::user()->birthday }}">
                        @if ($errors->first('birthday'))
                        <ul class="errors">
                            @foreach ($errors->get('birthday') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div  class="wrapInput">
                        <label class="labelInput" for="job">Occupazione</label>
                        <select class="input" name="job" id="job">
                            @foreach($jobs as $job)
                            <option value="{{$job}}">{{ $job }}</option>
                            @endforeach
                        </select>
                    </div>               
                        <input type="submit" class="submit" value="Salva">
                        <button type="button" class="delete" href="{{route('profile')}}">Annulla</button>
    </form>-->
    {{ Form::open(array('route' => 'editProfile.store', 'id' => 'formEditProfile', 'files' => false)) }}
                <div class="wrapInput">
                    {{ Form::label('name', 'Nome', ['class' => 'labelInput']) }}
                    {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                      @if ($errors->first('name'))
                        <ul class="errors">
                            @foreach ($errors->get('name') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                      @endif
                </div>
               <!-- <div class="wrapInput">
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
                    {{ Form::text('birthday', auth()->user()->birthday, ['class' => 'input', 'id' => 'birthday']) }}
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
                    {{ Form::text('job', ['1'=>'Operaio','2'=>'Insegnante','3'=>'Ingegnere','4'=>'Architetto'], '' , ['class' => 'input', 'id' => 'job']) }}
                    @if ($errors->first('job'))
                    <ul class="errors">
                        @foreach ($errors->get('job') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>-->
                <div>                
                    {{ Form::submit('Salva', ['class' => 'submit']) }}
                </div>
    {{ Form::close() }}
</div>
@endsection