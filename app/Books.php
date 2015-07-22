<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
    	'isbn',
    	'titulo',
    	'autor',
        'cantidad',
    	'proveedor',
    	'edicion',
    	'editorial',
    	'genero',
    	'pais',
    	'moneda',
    	'precio'
    ];

    public $timestamps = false;
}
