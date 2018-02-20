<meta name="DC.Type" content="Text"/> 
<meta name="DC.Language" content="<?php echo App::getLocale(); ?>"/> 
<meta name="viewport" content="width=device-width, initial-scale=0.3, maximum-scale=1"/> 
<meta charset="UTF-8"/> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="bioartemis">
<link rel="shortcut icon" href="{{asset('/web/images/icons/favicon.ico')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css' />
<link href="{{ asset('/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/css/dashboard.css') }}" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('web/css/magnific-popup.css')}}">

<script src="{{ asset('/web/js/jquery.min.js') }}"></script>

<link href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
<!-- include the BotDetect layout stylesheet -->
@if (class_exists('CaptchaUrls'))
<link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
@endif
