<?php

namespace App\Concepts;

use Illuminate\Database\Eloquent\Model;
use \Collective\Html\FormFacade as Form;
use App\User;

/**
 * Description of Pain
 *
 * @author duy
 */
class Commande extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commandes';
    public $timestamps = true; // activates timestamps

    // les actions du pain

    public static function displayActions($user, $commande) {
//        print_r("User: " . $user);

        if (!empty($user)) {

            if ($user->role_id == 0) {
// edit, delete
                echo "<a href='/dashboard/espace-admin/commandes/show/$commande->id'>" . Form::button('Visualiser') . "</a>";
                echo "<a href='/dashboard/espace-admin/commandes/modify/$commande->id'>" . Form::button('Modifier') . "</a>";
                echo "<a href='/dashboard/espace-admin/commandes/delete/$commande->id'>" . Form::button('Supprimer') . "</a>";
            } else if ($user->role_id == 1) {
// voir, edit, delete
                echo "<a href='/dashboard/espace-secretariat/commandes/show/$commande->id'>" . Form::button('Visualiser') . "</a>";
                echo "<a href='/dashboard/espace-secretariat/commandes/modify/$commande->id'>" . Form::button('Modifier') . "</a>";
                echo "<a href='/dashboard/espace-secretariat/commandes/delete/$commande->id'>" . Form::button('Supprimer') . "</a>";
            } else if ($user->role_id == 2) {
                //echo "<a href='/dashboard/espace-client/commandes/modify/$commande->id'>" . Form::button('Modifier') . "</a>";
                //echo "<a href='/dashboard/espace-client/commandes/delete/$commande->id'>" . Form::button('Supprimer') . "</a>";
                echo "<a href='/dashboard/espace-client/commandes/show/$commande->id'>" . Form::button('Visualiser') . "</a>";

                //echo "<a href='/dashboard/espace-client/commandes/payer/$commande->id'>" . Form::button('Payer') . "</a>";
                echo self::showPayPalButton($commande->id);
            }
        }
    }

    /**
     * Get commande status
     * */
    public static function getStatus($statusID) {

        $status = "en attende de paiement";
        switch ($statusID) {
//            case 0:
//                $status = "en cours de validation";
//                break;
            case 1:
                $status = "en attende de paiement";
                break;
            case 2:
                $status = "payé";
                break;
            default:
                $status = "en attende de paiement";
                break;
        }

        return $status;
    }

    /*     * *
     * Calculate the total price of a commande
     */

    public static function getTotalPrice($commandeID) {
        $details = DetailsCommande::where('id_commande', $commandeID)->get();
        $price = 0;
        foreach ($details as $d) {
            $pain = Pain::find($d->id_pain);
            $price += $pain->price * $d->quantite;
//            $item = array(
//                'id' => $pain->id,
//                'name' => $pain->name,
//                'price' => $pain->price,
//                'quantity' => $d->quantite,
//                'attributes' => array()
//            );            
        }
        return $price;
    }

    /*     * *
     * Get information about customer of the current commande
     */

    public static function getCustomer($commandeID) {
        $commande = Commande::find($commandeID);
        $customer = User::find($commande->client);
        return sprintf("%s %s (%s)", $customer->first_name, $customer->last_name, $customer->email);
    }

    public static function showPayPalButton() {
        return
                '<div><p>&nbsp;</p>' .
                '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">' .
                '<input type="hidden" name="cmd" value="_s-xclick">' .
                '<input type="hidden" name="hosted_button_id" value="RW2LZHKGD4TY2">' .
                '<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">' .
                '<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">' .
                '</form>' .
                '</div>';
    }

    public static function showPayPalButtonCart() {
        return
                '<div><p>&nbsp;</p>' .
                '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="RW2LZHKGD4TY2"><input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne"><img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1"></form>' .
                '</div>';
    }

}
