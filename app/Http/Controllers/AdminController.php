<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concepts\Commande;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Concepts\DetailsCommande;

class AdminController extends Controller {

    /**
     * Ajouter une nouvelle commande
     */
    public function save(Request $request) {
        $idCmd = $this->buildCommande($request);
//        echo $idCmd;
        $this->buildDetailsCommande($idCmd);

        $data = array(
            'id_commande' => $idCmd,
        );
        return view('dashboard.espace-admin.sauvegarder-panier')->with($data);
    }

    /**
     * Visualiser les commandes
     */
    public function showCommandes() {

        return view('dashboard.espace-admin.nos-commandes');
    }

    /**
     * Regler les commandes
     */
    public function checkout() {

        return view('dashboard.espace-client.payer-mes-commandes');
    }

    /**
     * Visualiser une commande
     */
    public function showCommande($commandeID) {

        return view('dashboard.nos-commandes.visualiser-commande')->with('commandeID', $commandeID);
    }

    /**
     * Un client peut supprimer une commande
     * @param    
     * @return  
     */
    public function delete($commandeID) {
        // remove details commande for this commande
        //DetailsCommande::where('id_commande', $commandeID)->delete();

        // remove this commande
        //Commande::destroy($commandeID);

        // show the list of commandes
        //$this->show();
        return view('dashboard.espace-admin.nos-commandes');
    }

    /**
     * Un client peut modifier une commande à partir de Request
     * @param    
     * @return  
     */
    public function modify($commandeID) {
        return view('dashboard.espace-admin.modifier-une-commande')->with('commandeID', $commandeID);
    }

    /**
     * Un client peut payer la commande
     * @param type $commandeID
     * @return type
     */
    public function payer($commandeID) {
        return view('dashboard.espace-client.payer-commande')->with('commandeID', $commandeID);
    }

    /*     * *
     * Prepare an order request
     * @return commande ID
     */

    public function buildCommande(Request $request) {
        $today = date("Ymd");
        $rand = sprintf("%04d", rand(0, 9999));
        $noCmd = "BIO-" . $today . "-" . $rand;

        // create new commande and save it using Eloquent
        $commande = new Commande;
        $commande->no_commande = $noCmd;
        $commande->client = $request->user()->id;
        $commande->save();

        return Commande::where('no_commande', $noCmd)->first()->id;
    }

    /*     * *
     * Details about the order request
     * 
     */

    public function buildDetailsCommande($idCmd) {
        // check the cart
        $items = Cart::getContent();
        foreach ($items as $item) {
            $details = array('id_commande' => $idCmd, 'id_pain' => $item->id, 'quantite' => $item->quantity);
            DetailsCommande::insert($details);
//            print_r($details);
        }
        
        // clear cart
        Cart::clear();
    }

}
