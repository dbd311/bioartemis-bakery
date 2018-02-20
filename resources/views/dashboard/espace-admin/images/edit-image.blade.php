@extends('dashboard.espace-admin.layouts.default')

@section('htmltag')
<html ng-app="plunker">
    @stop

    @section('title')
    <title>Back-office | Redimensionner une photo</title>
    @stop

    @section('main-content')

    <div class="container">
        @include('dashboard.espace-admin.includes.edit-image')
    </div>
    @stop


    @section('js')
    <script>document.write('<base href="' + document.location + '" />');</script>
    <link rel="stylesheet" href="style.css" />
    <script data-require="angular.js@1.0.x" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js" data-semver="1.0.8"></script>
    <script> var app = angular.module('plunker', []).config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
        });</script>

    <script src="{{ asset('/js/angularjs/images/upload.js')}} "></script>
    <script src="{{ asset('/js/angularjs/images/app.js')}} "></script>
    <script src="{{ asset('/js/angularjs/images/resize.js')}} "></script>
    <script src="{{ asset('/js/jquery/2.0.0/jquery.min.js')}} "></script>

    @stop
