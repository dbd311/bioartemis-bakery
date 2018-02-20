<?php
if (!Auth::check()) {
    // echo 'user is not logged in!';
    Redirect::to('/auth/login')->send();
} else {
    $user = Auth::user();
    if ($user->role_id != 2) {
        Redirect::to('/')->send();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
        <title>Espace client | Bienvenue</title>
        @show
        <link href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('/css/dashboard.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- include the BotDetect layout stylesheet -->
        <?php if (class_exists('CaptchaUrls')) { ?>
            <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
        <?php } ?>
    </head>
    <body>
        @include('dashboard.espace-client.includes.main-menu')

        @section('main-content')
        <div class="container">
            <div id="main" class="row">
                @include('includes.nos-pains')
            </div>
        </div>
        @show

    </body>
</html>
