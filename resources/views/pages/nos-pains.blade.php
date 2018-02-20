@extends('layouts.default')
@section('content')

<div class="team" id="team">
    <div class="wrap">
        <div class="heading_h">
            <h3><a id="nos-pains-bio">Liste des pains Bioartemis</a></h3>
        </div>        
        <div class="snippet">

            @include('includes.nos-pains')

        </div>
    </div>
</div>

@include('includes.points-de-vente')
@stop
