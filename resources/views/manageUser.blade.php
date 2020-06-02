@extends('layouts.admin')
@section('title', 'Cancella utente')

@section('content')

<div>
    <h1>Cancella Utente</h1>
     @if(session()->has('confermDelete'))
        <ul class="success">
            <li>{{ session()->get('confermDelete') }}</li>
        </ul>
    @endif
    {{ Form::open(array('route' =>'deleteMultipleUser.store', 'id' => 'deleteMultipleUser')) }}
    {{ Form::submit('Cancella tutti', ['class' => 'submit']) }}
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
            <td>{{$user->birthday}}</td>
            <td>{{$user->job}}</td>
            <td>{{$user->username}}</td>
            <td>
                <form action="{{route('deleteUser', $user->id)}}" method="POST">
                    @csrf
                    <input type="submit" value="Cancella">
                </form>
            </td>
         </tr>
        @endforeach
    </table>
    @else
    <p>Al momento non è registrato alcun Utente.</p>
    @endif
</div>
@endsection
