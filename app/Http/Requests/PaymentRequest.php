<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaymentRequest extends Request
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
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'dni' => 'required|size:8',
            'telefono' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|max:255',
            'tipo_pago' => 'required'
        ];
    }
}
