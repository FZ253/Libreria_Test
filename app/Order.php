<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'id_cart',
    	'isbn',
        'cantidad',
    	'subtotal'
    ];
    
    public $timestamps = false;
}
