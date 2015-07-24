<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PayRequest extends Request
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
            'cardNo' => 'required|numeric|size:16|exists:cardData,cardNo',
            'security_password' => 'required|numeric|size:4|exists:cardData,security_password',
            'payer_DNI' => 'required|numeric|size:8',
            'payer_name' => 'required|max:255',
            'payer_last_name' => 'required|max:255'
        ];
    }
}
