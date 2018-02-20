<?php

namespace App\Http\Controllers;

use App\Concepts\Pain;
use Illuminate\Support\Facades\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class PanierController extends Controller {

    /**
     * Ajouter un nouveau pain
     */
    public function addItem() {
        //echo 'hello';
        // lets create first our condition instance
        $saleCondition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'SALE 0%',
            'type' => 'tax',
            'target' => 'item',
            'value' => '-0%',
        ));
        // now the product to be added on cart
        $pain = Pain::find(Request::input('pain_id'));

        if (!empty($pain)) {
            $item = array(
                'id' => $pain->id,
                'name' => $pain->name,
                'price' => $pain->price,
                'quantity' => Request::input('quantity'),
                'attributes' => array(),
                'conditions' => $saleCondition
            );

            // finally add the product on the cart
            Cart::add($item);
        }

        return redirect('/dashboard/espace-client');
    }

    /**
     * Supprimer un pain
     * @param type $painID
     * @return type
     */
    public function deleteItem() {

        Cart::remove(Request::input('pain_id'));

        return redirect('/dashboard/espace-client/mon-panier');
    }

}
