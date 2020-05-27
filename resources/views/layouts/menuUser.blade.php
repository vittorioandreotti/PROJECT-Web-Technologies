<div class="menuContainer">
    @auth
            <div id="welcomeUser">
                @can('isUser')
                    <div style="color:white">Benvenuto, <a href="{{route('profile')}}">{{ Auth::user()->username }}</a>!</div>
                @endcan 
            </div>
    @endauth
    <ul class="headerMenu">
              <li class="headerMenuItem"><a href="{{ route('editProfile') }}" title="ModificaProfilo">Modifica Profilo</a></li>
              <li class="headerMenuItem"><a href="" title="ModificaPassword">Modifica Password</a></li>
               @auth
                <li class="headerMenuItem" id="logout"><a href="" class="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
               @endauth 
     </ul>
</div>