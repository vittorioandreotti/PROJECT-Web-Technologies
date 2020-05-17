@extends('layouts.public')
@section('title', 'Home')

@section('content')
<div class="container clearfix">
    <div id="slideshow">
      <img class="mySlides" src="{{asset('images/brandComponenti.jpg')}}">
      <!--<img class="mySlides" src="{{asset('images/airpods2pro.jpg')}}">
      <img class="mySlides" src="{{asset('images/reflex.jpg')}}">-->
    </div>

    <section class="cards">
          <div class="card">
              <div class="card_copy">
                  <h3>COMPONENTI PC</h3>
                  <img class="card_image" src="{{asset('images/componenti.jpg')}}" alt="image">
              </div>
          </div>
          <div class="card">
              <div class="card_copy">
                  <h3>AUDIO</h3>
                  <img class="card_image" src="{{asset('images/audio.jpg')}}" alt="image">
              </div>
          </div>
          <div class="card">
              <div class="card_copy">
                  <h3>FOTOGRAFIA</h3>
                  <img class="card_image" src="{{asset('images/foto.jpg')}}" alt="image">
                </div>
            </div>
    </section>
</div>
@endsection