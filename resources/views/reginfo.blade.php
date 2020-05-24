@extends ('layouts.public')
@section ('title', 'Modalità di registrazione')

@section('content')
<div class="whoWrapper">
    <h1 style="text-align: center">Come registrarsi?</h1>
        <h2>La registrazione può avvenire tramite una delle seguenti modalità:</h2>
        <ul>
            <li><h3>Cliccando direttamente sul tasto REGISTRATI posizionato in alto a destra</h3></li>
            <hr>
            <img class="card_image border"  src="{{asset('images/regist1.jpg')}}" alt="image">
            <li><h3>Cliccando sul pulsante registrati nella finestra di accesso</h3></li>
            <hr>
            <img class="card_image border"  src="{{asset('images/regist2.jpg')}}" alt="image">
            <li><h3>Oppure puoi cliccare direttamente <a style="color: red" href="{{route('register')}}">QUI</a> </h3></li>
            <hr>
        </ul>
    
    
</div>
@endsection
        
