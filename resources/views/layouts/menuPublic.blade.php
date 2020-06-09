  <div class="menuContainer">
      @auth
        <div id="welcomeUser">
            @can('isUser')
                <div style="color:white">Benvenuto, <a href="{{route('profile')}}">{{ Auth::user()->username }}</a>!</div>
            @endcan
            @can('isAdmin')
                <div style="color:white">Benvenuto, <a href="{{route('admin')}}">{{ Auth::user()->username }}</a>!</div>
            @endcan
            @can('isStaff')
                <div style="color:white">Benvenuto, <a href="{{route('staff')}}">{{ Auth::user()->username }}</a>!</div>
            @endcan
        </div>
      @endauth
      @guest
        <div id="login" >
            <a href="{{route('login')}}">Accedi</a>
            <a href="{{route('register')}}">Registrati</a>
        </div>  
      @endguest
        <ul class="headerMenu">
             <li class="headerMenuItem"><a href="{{asset('RelazioneTWEB.pdf')}}">Relazione</a></li>
          @can('isAdmin')
          <li class="headerMenuItem"><a href="{{ route('admin') }}" title="Home Admin">Home Admin</a></li>
          @endcan
          @can('isStaff')
          <li class="headerMenuItem"><a href="{{ route('staff') }}" title="Home Staff">Home Staff</a></li>
          @endcan
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
          @auth
          <li class="headerMenuItem" id="logout"><a href="" class="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @endauth 
        </ul>
    </div>
