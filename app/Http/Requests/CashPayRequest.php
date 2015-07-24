<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CashPayRequest extends Request
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
            'payer_DNI' => 'required|numeric',
            'payer_name' => 'required|max:255',
            'payer_last_name' => 'required|max:255'
        ];
    }
}
