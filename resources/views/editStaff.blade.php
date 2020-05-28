@extends('layouts.admin')
@section('title', 'Modifica Staff')

@section('content')
<div id="editProfile">
    <h1>Modifica profilo staff</h1>
    <form id="formEditProfile" name="editProfile"  method="post" action="{{route('editStaff.store', $staff->id)}}">
        @csrf
        <div  class="wrapInput">
            <label class="labelInput" for="name">Nome</label>
            <input class="input" type="text" name="name" id="name" value="{{ $staff->name }}">
            @if ($errors->first('name'))
            <ul class="errors">
                @foreach ($errors->get('name') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
                @endif
        </div>
        <div  class="wrapInput">
            <label class="labelInput" for="surname">Cognome</label>
            <input class="input" type="text" name="surname" id="surname" value="{{ $staff->surname }}">
            @if ($errors->first('surname'))
            <ul class="errors">
                @foreach ($errors->get('ssurname') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
                @endif
        </div>        
        <div  class="wrapInput">
            <label class="labelInput" for="Email">Email</label>
            <input class="input" type="text" name="email" id="email" value="{{ $staff->email }}">
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
                        <input class="input" type="text" name="residence" id="residence" value="{{ $staff->residence }}">
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
                        <input class="input" type="date" name="birthday" id="birthday" value="{{ $staff->birthday }}">
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
                        <button type="button" class="delete" href="{{route('manageStaff')}}">Annulla</button>        
    </form>
</div>
@endsection