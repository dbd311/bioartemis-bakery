<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Back-office | Bioartemis</title>
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">

        <!-- include the BotDetect layout stylesheet -->
        @if (class_exists('CaptchaUrls'))
        <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
        @endif
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img class="logo" src="{{ asset('/web/images/small-logo.png') }}" alt="Bioartemis"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    @include('dashboard.navigation')

                    @include('includes.logout')
                </div>
            </div>
        </nav>

        @yield('content')

    </body>
</html>
