@extends('layouts.admin')
@section('title', 'Cancella utente')

@section('content')

<div style="padding: 20px">
    <h1>Cancella Utente</h1>
    <br>
    <table border class="table"> 
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Cancella</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>
                <form action="{{route('deleteUser', $user->id)}}" method="POST">
                    @csrf
                    <input type="submit" value="Cancella">
                </form>
            </td>
         </tr>
        @endforeach
    </table>
</div>
@endsection
