<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'type',
    ];

    /**
     * Relación con productos
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
