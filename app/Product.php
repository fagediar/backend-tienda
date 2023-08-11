<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
    ];

    /**
     * Relación con usuarios
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Relación con pedidos
     */
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    /**
     * Relación con categoria
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
