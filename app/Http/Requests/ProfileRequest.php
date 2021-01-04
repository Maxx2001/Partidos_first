<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
            'name' => [
                'string',
                'max:255',
                Rule::unique('users')->ignore(auth()->id())
            ],
            'username' => [
                'string',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore(auth()->id())
            ],
            'phonenumber' => [
                'numeric',
                'digits:10',
                Rule::unique('users')->ignore(auth()->id())
            ]
        ];
    }
}
