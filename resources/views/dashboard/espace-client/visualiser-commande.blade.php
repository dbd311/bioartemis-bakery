@extends('dashboard.espace-client.layouts.default')

<?php

use App\Concepts\Commande;
use App\Concepts\DetailsCommande;
use App\Concepts\Pain;

$commande = Commande::find($commandeID);
//print_r($commande);

$details = DetailsCommande::where('id_commande', $commandeID)->paginate(5);
?>

@section('title')
<title>Espace client | Commande {{$commande->no_commande}}</title>
@stop

@section('main-content')

<div class="container">
    <div>Commande no '{{$commande->no_commande}}'</div>
    <p>Client : {{ Commande::getCustomer($commandeID) }}</p>
    <div>Date de création : {{$commande->created_at}}</div>
    <div>Prix total : <?php printf("%.2f", Commande::getTotalPrice($commandeID)); ?> euros </div>
    <div id="main" class="row">

        @foreach ($details as $item)
        <div class="post-container">
            <?php $pain = Pain::find($item->id_pain) ?>
            <h3 class="post-title">{{$pain->name}}</h3>     

            <div class="post-thumb"><img src="{{ asset($pain->photo1) }}" alt="{{ $pain->name }}"></div>
            <div class="post-thumb-top"><img src="{{ asset('/img/icons/logo-ab-eu-france.png') }}" alt="agriculture biologique"></div>
            <div class="post-content">
                <p>{{ $pain->description }}</p>                                
                <p><b>Prix :</b> {{ $pain->price }} euros / {{ $pain->weight }} gr</p>
                <p><b>Prix au kilo :</b> {{ $pain->price_per_kilo }} euros</p>
                <p><b>Quantité :</b> {{ $item->quantite }}</p>
                <div class="post-thumb-bottom-right"><img src="{{ asset('img/icons/nature_et_progres_label_bio.jpg') }}" alt="nature et progres" ></div>
            </div>
        </div>
        @endforeach

        {!! $details->render() !!}

    </div>

    <input type="button" value="Imprimer" onclick="window.print();">
    <input type="button" value="Payer" onclick="window.print();">
</div>
@stop