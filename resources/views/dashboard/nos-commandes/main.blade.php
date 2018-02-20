<?php

use App\Concepts\Commande;

$commandes = Commande::paginate(5);
?>

@foreach ($commandes as $commande)
<div class="post-container">
    <h3 class="post-title">{{$commande->no_commande}}</h3>     

    <div class="post-content">
        <p>Date de commande : {{ $commande->created_at }}</p>                                
        <p>Client : {{ Commande::getCustomer($commande->id) }}</p>
        <p>Statut : {{ Commande::getStatus($commande->statut) }}</p>
        <p>Prix total : <?php printf("%.2f", Commande::getTotalPrice($commande->id)); ?> euros </p>
        {{ Commande::displayActions(Auth::user(), $commande) }}
    </div>
</div>
@endforeach

{!! $commandes->render() !!}

