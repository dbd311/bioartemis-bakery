@extends('layouts.default')
@section('content')
<div class="row">
    <div>&nbsp;</div>
    <div class="wrap">
        Pour comannder du pain en ligne, veuillez <a href="auth/login">vous connecter</a> à votre compte.    

    </div>
    <div>&nbsp;</div>
    @if (!Auth::check())
    @include('includes.login')        
    @endif

    <div class="wrap">
        Si vous n'avez pas encore de compte, veuillez <a href="auth/register">vous inscrire</a> d'abord.
    </div>

</div>

@include('includes.points-de-vente')

@stop
