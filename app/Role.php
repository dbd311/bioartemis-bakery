<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Role
 *
 * @author duy
 */
class Role extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
    public $timestamps = false; // desactivates timestamps

    #protected $fillable = ['role_id', 'role_name', 'description'];
}
