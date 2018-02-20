<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
    <li><a href="{{ asset('/auth/login') }}">Connection</a></li>
    <li><a href="{{ asset('/auth/register') }}">Inscription</a></li>
    @else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img class="avatar" src="{{ asset(Auth::user()->avatar) }}"/> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>            
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ asset('/auth/profile') }}">Mon profil</a></li>
            <li><a href="{{ asset('/auth/preferences') }}">Mes préférences</a></li>
            <li><a href="{{ asset('/auth/logout') }}">Déconnection</a></li>            
        </ul>
    </li>
    @endif
</ul>
<!-- Scripts -->
<script src="{{ asset('/js/cloudflare/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('/js/cloudflare/bootstrap.min.js') }}"></script>
