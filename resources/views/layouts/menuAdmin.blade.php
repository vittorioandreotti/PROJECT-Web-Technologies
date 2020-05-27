<div>
        <ul class="headerMenu">
          <li class="headerMenuItem"><a href="{{ route('admin') }}" title="Va alla Home di Admin">Home</a></li>
          <li class="headerMenuItem"><a href="{{route('catalog1')}}">Catalogo</a></li>
          <li class="headerMenuItem"><a href="{{ route('newstaff') }}" title="Inserisce nuovo personale">Inserisci Staff</a></li>
         
          @auth
          <li class="headerMenuItem" id="logout"><a href="" class="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @endauth 
        </ul>
</div>