@extends('layouts.user')
@section('title', 'Profilo Personale')


@section('content')
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    @endif


<form class="contact-form" id="editProfile" name="editProfile"  method="post" action="{{route('editProfile.store')}}">
                @csrf
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="name">Nome </label>
                    <input class="input" type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                    @if ($errors->first('name'))
                    <ul class="errors">
                        @foreach ($errors->get('name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="surname">Cognome </label>
                    <input class="input" type="text" name="surname" id="surname" value="{{ Auth::user()->surname }}">
                    @if ($errors->first('surname'))
                    <ul class="errors">
                        @foreach ($errors->get('surname') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="email">Email </label>
                    <input class="input" type="text" name="email" id="email" value="{{ Auth::user()->email }}">
                    @if ($errors->first('email'))
                    <ul class="errors">
                        @foreach ($errors->get('email') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="hometown">Residenza </label>
                    <input class="input" type="text" name="hometown" id="hometown" value="{{ Auth::user()->homeTown }}">
                    @if ($errors->first('hometown'))
                    <ul class="errors">
                        @foreach ($errors->get('hometown') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="birthday">Data di nascita </label>
                    <input class="input" type="text" name="birthday" id="birthday" value="{{ Auth::user()->birthday }}">
                    @if ($errors->first('birthday'))
                    <ul class="errors">
                        @foreach ($errors->get('birthday') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div  class="wrap-input  rs1-wrap-input">
                    <label class="label-input" for="job">Occupazione</label>
                    <select class="input" name="job" id="job">
                        @foreach($jobs as $job)
                        <option value="{{$job}}">{{ $job }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="container-form-btn">                
                    <input type="submit" class="form-btn1" value="Salva">
                </div>
</form>
<!--{{ Form::open(array('route' => 'newproduct.store', 'id' => 'editProfile', 'files' => false, 'class' => 'contact-form')) }}
            <div>
                {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                {{ Form::label('surname', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', "", ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div >                
                {{ Form::submit('Salva', ['class' => 'form-btn1']) }}
            </div>
{{ Form::close() }}-->
@endsection