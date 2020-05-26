<div class="menuContainer">
        <ul class="headerMenu">
          <li class="headerMenuItem"><a href="{{route('catalog1')}}">Catalogo</a></li>
          <li class="headerMenuItem"><a href="{{route('contact')}}">Contattaci</a></li>
         <!-- <li><a href="{{ route('newproduct') }}" title="Inserisce nuovi prodotti">Inserisci</a></li>
          <li><a href="{{ route('admin') }}" title="Modifica i Prodotti">Modifica</a></li>
          <li><a href="{{ route('admin') }}" title="Cancella o prodotti">Cancella</a></li> -->
          @auth
          <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
    @endauth 
        </ul>
</div>