<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'address',
        'city',
    ];


    /**
     * Relación con productos
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    /**
     * Relación con productos
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
