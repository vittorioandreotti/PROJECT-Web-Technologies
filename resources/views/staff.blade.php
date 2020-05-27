@extends('layouts.staff')

@section('title', 'STAFF')

@section('content')
<div class="adminContainer">
    <h3>Area Staff</h3>
    <p>Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    <p>Seleziona nella barra la funzione che vuoi utilizzare</p>
</div>
@endsection


