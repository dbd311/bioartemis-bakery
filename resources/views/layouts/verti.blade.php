<!doctype html>
<html>
    <head>
        <meta name="DC.Type" content="Text"/> 
        <meta name="DC.Language" content="<?php echo App::getLocale(); ?>"/>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <meta name="description" content="">
        <meta name="author" content="bioartemis">
        <link rel="shortcut icon" href="{{asset('/web/images/icons/favicon.ico')}}" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- verti css and js -->
        <!--[if lte IE 8]><script src="/js/verti/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ asset('/css/verti/main.css') }}" />
        <!--[if lte IE 8]><link rel="stylesheet" href="/css/verti/ie8.css" /><![endif]-->

        <!-- end verti -->

        <link href="{{ asset('/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('/css/dashboard.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('web/css/magnific-popup.css')}}">

        <script src="{{ asset('/web/js/jquery.min.js') }}"></script>

        <link href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <!-- include the BotDetect layout stylesheet -->
        @if (class_exists('CaptchaUrls'))
        <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
        @endif
    </head>
    <body>

        <div class="container">
            @if (!Auth::check())
            <div class="login-form">
                <span><a href="/auth/login">Se connecter</a></span> / 
                <span class="small-button"><a href="/auth/register">S'inscrire</a></span>
            </div>
            @else
            <div class="login-form">
                <span class="small-button"><a href="/auth/logout">Se déconnecter</a></span>
            </div>
            @endif

            <!-- Header -->
            <div id="header-wrapper">
                <header id="header" class="container">

                    <!-- Logo -->
                    <div class="logo"><a href="/"><img src="{{ asset('web/images/logo.png') }}"></a></div>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="current"><a href="/">Accueil</a></li>

                            <li><a href="/painbio">Pain bio</a></li>
                            <li><a href="/nos-pains">Nos pains</a></li>
                            <li><a href="/acheter">Acheter</a></li>
                            <li><a href="/photos-et-videos">Photos et vidéos</a></li> 
                            <li>
                                <a href="#">Points de vente</a>
                                <ul>
                                    <li>
                                        <a href="#">en France</a>
                                        <ul>
                                            <li><a href="#">Metz</a></li>
                                            <li><a href="#">Thionville</a></li>
                                        </ul>

                                        <a href="#">au Luxembourg</a>
                                        <ul>
                                            <li><a href="#">Lorem ipsum dolor</a></li>
                                            <li><a href="#">Phasellus consequat</a></li>
                                            <li><a href="#">Magna phasellus</a></li>
                                            <li><a href="#">Etiam dolore nisl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">en Belgique</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </nav>

                </header>
            </div>

            <div id="main" class="row">

                @section('content')
                @show

            </div>
        </div>

        @include('includes.footer')
        @include('includes.go-top')

        <!-- Scripts -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>