<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "first_name" => "required",
            "last_name" => "required",
            "nataional_number" => "required",
            "phone_number" => "required|numeric|min:8",
            "email" => "required|email",
            "password "=> "required",
            "password_Conf" => "required|same :password "
        ];
    }
}
