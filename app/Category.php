<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    /**
     * Relación con productos
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
