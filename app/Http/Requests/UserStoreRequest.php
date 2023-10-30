<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "name" => ["required", "string"],
            "lastname" => ["string"],
            "password" => ["required", "digits_between:6,18"],
            "email" => ["string", "unique:users,email", "email:rfc,dns"],
            "cpf" => ["string", "unique:users,cpf"],
            "cellphone" => ["required", "unique:users,cellphone"],
            "address" => ["string"],
            "birthday" => ["string"]
        ];
    }

    public function messages(): array
    {
        return [];
    }
}
