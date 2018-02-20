@extends('dashboard.espace-client.layouts.default')
@section('title')
<title>Espace client | Mon panier</title>
@stop

@section('main-content')

<div>
    <p>Le panier a été sauvegardé dans la commande {{ $id_commande }}</p>
    <p><a href="/dashboard/espace-client/mes-commandes">Visualiser toutes mes commandes</a></p>
</div>

@stop