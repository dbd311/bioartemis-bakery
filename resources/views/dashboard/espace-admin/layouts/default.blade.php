<?php
if (!Auth::check()) {
    // echo 'user is not logged in!';
    Redirect::to('auth/login')->send();
} else {
    $user = Auth::user();
    if ($user->role_id != 0) {
        Redirect::to('/')->send();
    }
}
?>
<!DOCTYPE html>
@section('htmltag')
<html>
    @show
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
        <title>Back-office | Bienvenue</title>
        @show
        @section('css')
        <link href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('/css/dashboard.css') }}" type="text/css" rel="stylesheet">
        <!-- include the BotDetect layout stylesheet -->
        <?php if (class_exists('CaptchaUrls')) { ?>
            <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
        <?php } ?>
        @show
        @section('js')

        @show
    </head>
    <body>
        @include('dashboard.espace-admin.includes.main-menu')
        @section('main-content')
        @include('dashboard.espace-admin.includes.gestions')
        @show

    </body>
</html>
