@extends ('layouts.public')

@section('title', 'Contattaci')

@section('link')
@parent 
@endsection

@section('content')
<div class="contactWrapper">
    <h1>Hai bisogno di contattarci? Il Servizio Clienti è a tua disposizione al telefono o via email</h1>
    <div class="contactContainer">
        <div class="emailContainer">
            <h3><a href="mailto:info@iprice.it" title="Inviaci un messaggio">Email</a></h3>
                <span>Scrivici, ti risponderemo al più presto.</span>
        </div>
        <div class="phoneContainer">
                <h3>Telefono</h3>
                <span>LUNEDÍ-VENERDÍ 8:00 - 19:00 <br> SABATO 9:00 - 17:00</span>
                <h4>CHIAMACI</h4>
                <span>Al numero 0294455500</span>
        </div>
    </div>
</div>
@endsection

