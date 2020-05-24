@extends ('layouts.public')
@section ('title', "Modalità d'acquisto")

@section('content')
<div id='containerInfoShop'>
        <h1>Le nostre modalità d'acquisto</h1>
    <div class="infoText">
        <p><strong>iPrice</strong> ti permette di scegliere comodamente da casa tua gli articoli che più soddisfano le tue esigenze.</p>
        <p>Per l'acquisto puoi recarti presso il <a href="{{route ('where')}}">nostro negozio</a> o effettuare un ordine <a href="{{route('contact')}}">contattandoci.</a></p>
    </div>
        <p><b>iPrice</b> per gli acquisti effettuati online ti permette di pagare il tuo ordine con le seguenti modalità:</p>
        <section class="contentInfoShop">
            <h3>Carta di credito</h3>
            <p>Con il pagamento con carta di credito non sarà addebitato alcun tipo di supplemento.<br>
                Per tutte le carte di credito è necessario inserire il codice CVV2 altrimenti l'ordine viene annullato.<br>
            <b>Nel momento in cui si inseriscono i dati della carta di credito viene richiesta alla banca solo l'autorizzazione alla spesa sulla carta di credito</b></p>
            <h3>PayPal</h3>
            <p><b>PayPal</b> è un sistema di pagamento on-line che prevede l'apertura di un conto presso PayPal.<br>
                Scegliendo questa modalità, dopo aver cliccato "invia ordine", si viene re-indirizzati ad una pagina del sito PayPal dove inserire e-mail e password del conto Paypal, per poter effettuare il pagamento dell'ordine.<br>
                Per ogni transazione eseguita con questo metodo viene inviata un'e-mail di conferma da PayPal.<br>
                L'importo dell'ordine viene addebitato sul conto PayPal al momento della presa in carico dell'ordine.</p>
            <h3>Pagamento in negozio</h3>
            <p>Per gli ordini on line per cui è prevista la possibilità di ritiro in negozio è possibile scegliere di pagare l'acquisto in negozio attraverso le seguenti modalità:
                <ul>
                    <li>Contanti</li>
                    <li>Carta di credito</li>
                    <li>Bancomat</li>
                    <li>Assegno bancario</li>
                </ul></p>
            Tra i più noti corrieri a cui affidiamo le nostre spedizioni ci sono:
            <div class="infobox1">
                <!--<img src="{{asset('images/courier/BRT.png')}}">-->
                <img src="{{asset('images/courier/corrieri.png')}}">
            </div>
            
        </section>
   <!-- <div class="infoContainer">
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
    </div>-->
</div>
@endsection
        
