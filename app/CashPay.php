<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashPay extends Model
{
    protected $fillable = [
    	'id_cart',
    	'payer_DNI',
    	'payer_name',
    	'payer_last_name'
    ];

    public $timestamps = false;
}