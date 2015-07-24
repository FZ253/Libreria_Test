<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = [
    	'id_cart',
        'nombres',
    	'apellidos',
    	'dni',
        'telefono',
    	'fecha_nacimiento',
    	'direccion',
    	'tipo_pago'
    ];

    public $timestamps = false;
}
