@extends ('layouts.public')
@section ('title', 'Modalità di registrazione')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/reginfo.css') }}" > 
@endsection

@section('content')
<div class="regInfoWrapper">
    <h1 style="text-align: center">Come registrarsi?</h1>
        <h2>La registrazione può avvenire tramite una delle seguenti modalità:</h2>
        <ul>
            <li><h3>Cliccando direttamente sul tasto REGISTRATI posizionato in alto a destra</h3></li>
            <hr>
            <div class="imgContainer"><img style="width: 70%;"  src="{{asset('img/register.png')}}" alt="image"></div>
            <li><h3>Cliccando sul pulsante registrati nella finestra di accesso</h3></li>
            <hr>
            <div class="imgContainer"><img style="width: 30%"  src="{{asset('img/register2.png')}}" alt="image"></div>
            @guest
                <li><h3>Oppure puoi cliccare direttamente <a style="color: red" href="{{route('register')}}">QUI</a> </h3></li>
            @endguest
            <hr>
        </ul>
    
    
</div>
@endsection
        
