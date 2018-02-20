@extends('dashboard.espace-client.layouts.default')
@section('title')
<title>Espace client | Modification de la commande</title>
@stop

@section('main-content')

<?php
use App\Concepts\Commande;
use App\Concepts\DetailsCommande;

$commande = Commande::find($commandeID);

//print_r($commande);

$details  = DetailsCommande::where('id_commande', $commandeID)->first();

//print_r($details);

?>


@stop