@extends('dashboard.espace-client.layouts.default')

<?php

use App\Concepts\Commande;
use App\Concepts\DetailsCommande;
use App\Concepts\Pain;

$commande = Commande::find($commandeID);
?>
@section('title')
<title>Espace client | Payer la commande no {{$commande->no_commande}}</title>
@stop

@section('main-content')

<div class="wrap">
    <p>Veuillez imprimer la commande '{{$commande->no_commande}}' et l'envoyer à notre service de vente via l'adresse : <a href="mailto:contact@bioartemis.fr">contact@bioartemis.fr</a></p>
    <p><a href="/dashboard/espace-client/mes-commandes">Visualiser toutes mes commandes</a></p>
</div>

@stop