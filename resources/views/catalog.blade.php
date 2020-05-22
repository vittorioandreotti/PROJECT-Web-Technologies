@extends('layouts.public')
@section('title', 'Catalogo')

@section('content')
<div id="catalogoContainer">
        <ul class="sideMenuCatalog">
          <li ><a href="">Componenenti PC</a>
           <ul>
                      <li> <a href="">RAM</a></li>
                      <li> <a href="">Schede Video</a></li>
                      <li> <a href="">Schede Madri</a></li>
                      <li> <a href="">Processori</a></li>
                  </ul></li>
          
          <li ><a href="">Audio</a> <ul>
                      <li> <a href="">AirPods</a></li>
                      <li> <a href="">Cuffie</a></li>
                      <li> <a href="">Registratori</a></li>
                      <li> <a href="">Console DJ</a></li>
                  </ul></li>
          <li ><a href="">Fotografia</a> <ul>
                      <li> <a href="">Reflex</a></li>
                      <li> <a href="">Videocamere</a></li>
                  </ul></li>       
        </ul>
    <div class="catalogoProdotti">
    @isset($products)
    <h2>RAM</h2>
    <span>Benvenuto nella sezione *Ram* di iPrice.<br> Scegli tra tantissimi prodotti in offerta e con consegna rapida.<br> Scopri la nostra ampia proposta, consulta i prezzi e acquista comodamente online.</span>
    <div>
        <input type="text" placeholder="Cerca">
    </div>
    @foreach ($products as $product)
                    <div class="containerProdotto">
                        <img src="{{ asset('images/products/' . $product->image) }}">
                         <div class="info">
                            <h2 class="title">Prodotto: {{ $product->nome }}</h2>
                            <p class="meta">Prezzo: {{ $product->prezzo }}</p>
                    </div>
                    </div>
    @endforeach
    @endisset()
    </div>
</div>
@endsection