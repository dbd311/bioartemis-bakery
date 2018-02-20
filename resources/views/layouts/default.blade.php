<!doctype html>
<html>
    <head>
        @include('includes.head')        
    </head>
    <body>
        @if (!Auth::check())
        <div style="text-align: right; padding-right:65px">
            <a href="/auth/login">Se connecter</a> | <a href="/auth/register">S'inscrire</a>
        </div>
        @else

        <div style="text-align: right; padding-right:5px">
            <a href="/dashboard">Espace 
                <?php
                $user = Auth::user();
                switch ($user->role_id) {
                    case 0: echo 'admin';
                        break;
                    case 1: echo 'admin';
                        break;
                    default: echo 'client';
                        break;
                }
                ?></a> | 
            <a href="/auth/logout">Se déconnecter</a>
        </div>
        @endif

        <div class="container">

            <header class="row">
                @include('includes.header')
            </header>

            <div id="main" class="row">

                @yield('content')

            </div>
        </div>

        @include('includes.footer')
        @include('includes.go-top')

    </body>
</html>