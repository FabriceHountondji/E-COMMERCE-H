<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
            'phone' => 'required',
            'address' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,svg,png,gif|max:100000',
            'sexe' => 'required',
            'user_id' => 'integer',
            'birthday' => 'required',
        ];
    }
}
