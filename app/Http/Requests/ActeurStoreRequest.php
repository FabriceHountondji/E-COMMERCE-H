<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActeurStoreRequest extends FormRequest
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
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'email' => 'required|email|unique:acteurs',
            'phone' => 'required',
            'address' => 'required',
            'sexe' => 'required',
            'fonction_id' => 'integer',
            'user_id' => 'integer',
            'birthday' => 'required',
        ];
    }
}
