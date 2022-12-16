<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promos';

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
    protected $fillable = ['nama', 'tanggal_mulai_berlaku', 'tanggal_kadaluarsa'];

    
}
