<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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

           'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'password' => ['string', 'min:8', 'confirmed'],
            'telephone' => ['integer', 'max:60'],
        ];
    }
}
