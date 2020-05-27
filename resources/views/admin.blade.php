@extends('layouts.admin')

@section('title', 'ADMIN')

@section('content')
<div class="adminContainer">
    <h3>Area Amministratore</h3>
    <p>Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    <p>Seleziona nella barra la funzione che vuoi utilizzare</p>
</div>
@endsection


