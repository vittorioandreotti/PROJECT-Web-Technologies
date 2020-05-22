  <div class="menuContainer">
        <div id="login" >
            <a href="">Accedi</a>
            <a href="">Registrati</a>
        </div>
        <ul class="headerMenu">
          <li class="headerMenuItem"><a href="{{route('catalog1')}}">Catalogo</a></li>
          <li class="headerMenuItem"><a href="{{ route('who') }}">Chi siamo</a></li>
          <li class="headerMenuItem"><a href="{{ route('where') }}">Dove Siamo</a></li>
          <li class="headerMenuItem">
              <a href="">Informazioni</a>
              <div id="subMenu">
                  <ul>
                      <li> <a href="{{route('shopinfo')}}">Modalità d'acquisto</a></li>
                      <li> <a href="{{ route('reginfo') }}">Modalità di registrazione</a></li>
                  </ul>
              </div>
          </li>
          <li class="headerMenuItem"><a href="{{route('contact')}}">Contattaci</a></li>
        </ul>
    </div>
