@extends('layouts.admin')

@section('title', 'ADMIN')

@section('content')
<div>
    <h3>Area Amministratore</h3>
    <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</p>
    <p>Seleziona nella barra la funzione che vuoi utilizzare</p>
</div>
@endsection


