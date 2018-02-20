<?php
if (!Auth::check()) {
    // echo 'user is not logged in!';
    Redirect::to('auth/login')->send();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Back-office | Modifier un pain</title>
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">

        <!-- include the BotDetect layout stylesheet -->
        @if (class_exists('CaptchaUrls'))
        <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
        @endif
    </head>
    <body>
        @include('dashboard.espace-admin.includes.main-menu')

        @yield('content')
        <div class="container">
            @include('dashboard.espace-admin.includes.modif-pain')
        </div>

    </body>
</html>
