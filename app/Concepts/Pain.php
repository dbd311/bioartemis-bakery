<?php

namespace App\Concepts;

use Illuminate\Database\Eloquent\Model;
use \Collective\Html\FormFacade as Form;

/**
 * Description of Pain
 *
 * @author duy
 */
class Pain extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pains';
    public $timestamps = false; // desactivates timestamps

    /*     * *
     * Get the image path containing images of bread
     */

    public static function getImagePath() {
        return "img/pains/";
    }

// les actions du pain
    public static function displayActions($user, $pain) {
//        print_r("User: " . $user);
        $actionTaken = false;
        if (!empty($user)) {

            if ($user->role_id == 0) {
// edit, delete
                echo "<a href='/dashboard/espace-admin/pains/modify/$pain->id'>" . Form::button('Modifier') . "</a>";
                echo "<a href='/dashboard/espace-admin/pains/delete/$pain->id'>" . Form::button('Supprimer') . "</a>";
            } else if ($user->role_id == 1) {
// edit, delete
                echo "<a href='/dashboard/espace-secretariat/pains/modify/$pain->id'>" . Form::button('Modifier') . "</a>";
                echo "<a href='/dashboard/espace-secretariat/pains/delete/$pain->id'>" . Form::button('Supprimer') . "</a>";
            }

            if ($user->role_id != 2) {
                $actionTaken = true;
            }
        }

        if (!$actionTaken) { // client or visiteur
            echo Form::open(array('method' => 'POST', 'url' => 'pains/mon-panier/addItem'));

            echo Form::hidden('pain_id', $pain->id);
            echo Form::label('lb_quantity', 'Quantité :&nbsp;');
            echo Form::text('quantity', 1, ['pattern' => "([0-9]+)", 'min' => 1, 'max' => 1000, 'class' => 'quantity_number']);
            echo "<br>";
            echo Form::submit('Ajouter au panier', array('name' => 'addItem'));
//            echo Form::hidden('_token', csrf_token());
            echo Form::close();
        }
    }

}
