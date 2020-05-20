@extends ('layouts.public')
@section ('title', 'Modalità dacquisto')

@section('content')
<div id='containerInfoShop'>
        <h1>Le nostre modalità d'acquisto</h1>
    <div class="infoText">
        <p><strong>iPrice</strong> ti permette di scegliere comodamente da casa tua gli articoli che più soddisfano le tue esigenze.</p>
        <p>Per l'acquisto puoi recarti presso il <a href="{{route ('where')}}">nostro negozio</a> o effettuare un ordine <a href="{{route('contact')}}">contattandoci.</a></p>
    </div>
    <div class="infoContainer">
        <section class="infobox">
            <h3>MODALITÀ DI PAGAMENTO</h3>
            <div class="infobox1">
                <img src="{{asset('images/payments/americanexpress.png')}}">
                <img src="{{asset('images/payments/mastercard.png')}}">
                <img src="{{asset('images/payments/paypal.png')}}">
                <img src="{{asset('images/payments/visa.png')}}">
            </div>
        </section>
        <section class="infobox">
            <h3>SPEDITO DA</h3>
            <div class="infobox1">
                <img src="{{asset('images/courier/BRT.png')}}">
                <img src="{{asset('images/courier/Posteitaliane.png')}}">
                <img src="{{asset('images/courier/gls.png')}}">
                <img src="{{asset('images/courier/sda.png')}}">
                <img src="{{asset('images/courier/tnt.png')}}">
            </div>
        </section>
        <section class="infobox">
            <h3>PUOI TROVARCI SU</h3>
            <div class="infobox1">
                <div class="infobox2"><img src="{{asset('images/social/facebook.png')}}"></div>
                <div class="infobox2"><img src="{{asset('images/social/instagram.png')}}"></div>
                <div class="infobox2"><img src="{{asset('images/social/twitter.png')}}"></div>
            </div>
        </section>
    </div>
@endsection
        
