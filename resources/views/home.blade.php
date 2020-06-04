@extends('layouts.public')
@section('title', 'Home')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" > 
@endsection

@section('scripts')
@parent
<script src="{{asset('js/slider.js')}}"></script>
@endsection

@section('content')
<div id="slideshow">
    <div id="slideshow-wrapper">
        <img src="{{asset('images/brandComponenti.jpg')}}">
        <img src="{{asset('images/airpods2pro.jpg')}}">
        <img src="{{asset('images/reflex.jpg')}}">
    </div>
</div>

    <section class="cards">
          <div class="card">
              <div class="card_copy">
                  <h3>COMPONENTI PC</h3>
                  <img class="card_image" src="{{asset('images/componenti.jpg')}}" alt="Immagine componenti pc" usemap="#componentiPC">
                  <map name="componentiPC">
                      <area shape="rect" coords="0 350 424 0" href="{{route('catalog2',[1])}}">
                  </map>
              </div>
          </div>
          <div class="card">
              <div class="card_copy">
                  <h3>AUDIO</h3>
                  <img class="card_image" src="{{asset('images/audio.jpg')}}" alt="image" usemap="#audio">
                  <map name="audio">
                    <area shape="rect" coords="0 350 424 0" href="{{route('catalog2',[2])}}">
                  </map>
              </div>
          </div>
          <div class="card">
              <div class="card_copy">
                  <h3>FOTOGRAFIA</h3>
                  <img class="card_image" src="{{asset('images/foto.jpg')}}" alt="image" usemap="#fotografia">
                  <map name="fotografia">
                    <area shape="rect" coords="0 350 424 0" href="{{route('catalog2',[3])}}">
                  </map>
                </div>
            </div>
    </section>
@endsection 