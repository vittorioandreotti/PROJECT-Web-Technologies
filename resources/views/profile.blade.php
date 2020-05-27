@extends('layouts.public')
@section('title', 'Profilo Personale')

@section('content')
<div>
{{Auth::user()->name}}
{{Auth::user()->surname }}
{{Auth::user()->email}}
{{Auth::user()->homeTown}}
{{Auth::user()->birthday}}
{{Auth::user()->job}}

</div>

@endsection