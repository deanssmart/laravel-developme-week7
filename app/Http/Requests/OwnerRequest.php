<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // always return true
        // unless you add user logins
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
            "first_name" => ["required", "string", "max:50"],
            "last_name" => ["required", "string", "max:50"],
            "telephone" => ["required", "string", "max:14"],
            "email" => ["required", "string", "max:50"],
            "address_1" => ["required", "string", "max:100"],
            "address_2" => ["nullable", "string", "max:100"],
            "town" => ["required", "string", "max:50"],
            "postcode" => ["required", "string", "max:10"],
        ];
    }
}
