<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateBookRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'isbn' => 'required|numeric',
            'titulo' => 'required',
            'autor' => 'required',
            'cantidad' => 'required|numeric',
            'proveedor' => 'required',
            'edicion' => 'required|numeric',
            'editorial' => 'required',
            'genero' => 'required',
            'pais' => 'required',
            'moneda' => 'required',
            'precio' => 'required|numeric'
        ];
    }
}
