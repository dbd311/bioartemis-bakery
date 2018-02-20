<?php

namespace App\Concepts;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Category
 *
 * @author duy
 */
class Category extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
    public $timestamps = false; // desactivates timestamps
}
