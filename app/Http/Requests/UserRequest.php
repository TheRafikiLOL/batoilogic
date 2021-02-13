<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password1' => 'required',
            'password2' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'surname.required' => 'Los apellidos son obligatorios.',
            'address.required' => 'La dirección es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'password1.required' => 'La contraseña es obligatorio.',
            'password2.required' => 'La contraseña es obligatorio.'
        ];
    }
}
