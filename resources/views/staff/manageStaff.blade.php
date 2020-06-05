@extends('layouts.admin')
@section('title', 'Gestisci Staff')

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
<div>
    <h1>Gestisci Staff</h1>
    @if(session()->has('confermDelete'))
        <ul class="success">
            <li>{{ session()->get('confermDelete') }}</li>
        </ul>
    @endif
    <button id="insertStaff" class="button">Aggiungi Staff</button>
    {{ Form::open(array('route' =>'deleteMultipleUser.store', 'id' => 'deleteMultipleUser')) }}
    {{ Form::submit('Cancella tutti', ['class' => 'submit','id' => 'multipleDelete']) }}
    @if(!$staffs->isEmpty())
    <table border class="table"> 
        <tr>
            <th> </th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Modifica</th>
            <th>Cancella</th>
        </tr>
        @foreach($staffs as $staff)
        <tr>
            <td>{{Form::checkbox('users[]',$staff->id)}}</td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->surname}}</td>
            <td>
                <button id="staff{{$staff->id}}"><a href="{{route('editStaff', $staff->id)}}">Modifica</a></button>
            </td>
            <td>
                {{ Form::open(array('route' =>['deleteUser',$staff->id], 'id' => 'deleteUser')) }}
                {{ Form::submit('Cancella', ['class' => '']) }}
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