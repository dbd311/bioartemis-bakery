<?php

use App\Concepts\Pain;
use App\Concepts\Commande;

// then you can:
$items = Cart::getContent();

echo '<div>Vous avez commandé <span class="emphasize">' . sizeof($items) . '</span> article(s) ';
echo 'pour un prix total de <span class="emphasize">' . Cart::getTotal() . '</span> euros';
echo '<input type="button" value="Imprimer" onclick="window.print();">';


//print_r($items);
//print Cart::getTotal();
echo '</div><div class="snippet">';

$items->each(function($item) {

    $pain = Pain::find($item->id);

    echo Form::open(array('method' => 'POST', 'url' => '/pains/mon-panier/deleteItem'));
    echo '<div class="post-container">' .
    '  <h3 class="post-title">' . $pain->name . '</h3>' .
    '  <div class="post-thumb">' . HTML::image($pain->photo1, $pain->name) . '</div>' .
    '<div class="post-thumb-top">' . HTML::image("/img/icons/logo-ab-eu-france.png", "agriculture biologique") . '</div>' .
    '  <div class="post-content">' .
    '    <p>' . $pain->description . '</p>' .
    '    <p><b>Prix :</b> ' . $pain->price . ' euros / ' . $pain->weight . ' gr</p>' .
    '    <p><b>Prix au kilo : </b>' . $pain->price_per_kilo . ' euros</p>' .
    '    <p><b>Quantité : </b>' . $item->quantity . '</p>';
    echo Form::hidden('pain_id', $item->id);
    echo Form::submit('Supprimer', array('name' => 'deleteItem'));
    echo '<div class="post-thumb-bottom-right">' . HTML::image("/img/icons/nature_et_progres_label_bio.jpg", "nature et progres") . '</div>';

    echo '</div> </div>';
    echo Form::close();
});

echo '<p>&nbsp;
</p><div class = "wrap">';

echo '<table><tr><td>';

echo Form::open(array('method' => 'POST', 'url' => '/dashboard/espace-client/sauvegarder-mon-panier'));
echo '<input type="submit" value="Sauvegarder la commande" >';
echo Form::close();

echo '</td><td>';

//echo Form::open(array('method' => 'POST', 'url' => '/dashboard/espace-client/payer-mes-commandes'));
//echo '<input type="submit" value="Payer">';
//echo Form::close();

echo Commande::showPayPalButtonCart();

echo '</td><td>';

echo '<input type="button" value="Imprimer" onclick="window.print();">';

echo '</td></tr></table>';
echo '<p>&nbsp;
</p></div></div>';
