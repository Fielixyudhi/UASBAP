<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedback';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kolomnama', 'email', 'kolomkomentar'];

    
}
