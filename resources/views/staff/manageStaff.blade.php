@extends('layouts.admin')
@section('title', 'Gestisci Staff')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}" >
@endsection

@section('scripts')
@parent
<script src="{{asset('js/showHideDeleteAllButton.js')}}"></script>
<script>
    $(function() {
        $("#insertStaff").on('click',function() {
            window.location.href="{{route('newstaff')}}";
        })
    })
</script>
@endsection

@section ('content')
<div id="manageStaff">
    <h1>Gestisci Staff</h1>
    <p>Utilizza questa form per modificare o cancellare uno o più utenti staff.<br>
       Se invece vuoi aggiungerne uno nuovo clicca qui:</p>
    <button id="insertStaff" class="button">Aggiungi Staff</button>
    <hr>
    @if(session()->has('confermDelete'))
        <ul class="success">
            <li>{{ session()->get('confermDelete') }}</li>
        </ul>
    @endif
    {{ Form::open(array('route' =>'deleteMultipleUser.store', 'id' => 'deleteMultipleUser')) }}
    {{ Form::submit('Cancella tutti', ['class' => 'cancel','id' => 'multipleDelete']) }}
    @if(!$staffs->isEmpty())
    <table border class="table"> 
        <tr>
            <th> </th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Username</th>
            <th>Modifica</th>
            <th>Cancella</th>
        </tr>
        @foreach($staffs as $staff)
        <tr>
            <td>{{Form::checkbox('users[]',$staff->id)}}</td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->surname}}</td>
            <td>{{$staff->username}}</td>
            <td>
              <a id="edit" href="{{route('editStaff', $staff->id)}}">Modifica</a>
            </td>
            <td>
                {{ Form::open(array('route' =>['deleteUser',$staff->id], 'id' => 'deleteUser')) }}
                {{ Form::submit('Cancella', ['class' => 'cancel']) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </table>
     {{Form::close()}}
    @else
    <p>Al momento non è registrato nessun utente Staff.</p>
    <p><a href="{{route('newstaff')}}">Clicca qui</a> per aggiungerne uno</p>
    @endif
</div>
@endsection