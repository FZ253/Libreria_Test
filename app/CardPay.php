<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardPay extends Model
{
    protected $fillable = [
    	'id_cart',
    	'cardNo'
    ];

    public $timestamps = false;
}
