@extends('layouts.admin')
@section ('title', 'Cancella utente')

@section ('content')

<div>
    <h1>Cancella Utente</h1>
<br>
<table border class="table"> 
    <tr><th>Nome</th><th>Cognome</th><th>Cancella</th></tr>
    @foreach($users as $user)
    <tr><td>{{$user->name}}</td><td>{{$user->surname}}</td><td><img class="card_delete" src="{{asset('images/delete.jpg')}}"></td></tr>
    @endforeach
</table>
</div>

@endsection
