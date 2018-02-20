<?php

namespace App\Concepts;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Selling point
 *
 * @author duy
 */
class SellingPoint extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'selling_points';
    public $timestamps = false; // desactivates timestamps
}
