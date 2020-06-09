@extends('layouts.admin')
@section('title', 'Cancella utente')

@section('link')
@parent
@endsection

@section('scripts')
@parent
<script src="{{asset('js/showHideDeleteAllButton.js')}}"></script>
@endsection

@section('content')
<div id="deleteUser">
    <h1>Cancella Utente</h1>
    <p>Utilizza questa form per cancellare uno o più utenti registrati.</p>
    <hr>
     @if(session()->has('confermDelete'))
        <ul class="success">
            <li>{{ session()->get('confermDelete') }}</li>
        </ul>
    @endif
    {{ Form::open(array('route' =>'deleteMultipleUser.store', 'id' => 'deleteMultipleUser')) }}
    {{ Form::submit('Cancella tutti', ['class' => 'cancel','id' => 'multipleDelete']) }}
    @if(!$users->isEmpty())
    <table border class="table"> 
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Residenza</th>
            <th>Data di nascita</th>
            <th>Occupazione</th>
            <th>Username</th>
            <th></th>
            
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{Form::checkbox('users[]',$user->id)}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->residence}}</td>
            @include('helpers/convertDate',['date'=>$user->birthday])
            <td>{{$user->job}}</td>
            <td>{{$user->username}}</td>
            <td>
                {{ Form::open(array('route' =>['deleteUser',$user->id], 'id' => 'deleteUser')) }}
                {{ Form::submit('Cancella', ['class' => 'cancel']) }}
                {{ Form::close() }}
            </td>
         </tr>
        @endforeach
    </table>
    {{Form::close()}}
    @else
    <p>Al momento non è registrato alcun Utente.</p>
    @endif
</div>
@endsection
