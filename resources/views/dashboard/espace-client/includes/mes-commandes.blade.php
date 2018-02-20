<?php

use App\Concepts\Commande;

$commandes = Commande::where('client', '=', Auth::user()->id)->paginate(5);
?>

@foreach ($commandes as $commande)
<div class="post-container">
    <h3 class="post-title">{{$commande->no_commande}}</h3>     

    <div class="post-content">
        <p>Date de commande : {{ $commande->created_at }}</p>                                
        <p>Statut : {{ Commande::getStatus($commande->statut) }}</p>

        {{ Commande::displayActions(Auth::user(), $commande) }}
    </div>
</div>
@endforeach

{!! $commandes->render() !!}

