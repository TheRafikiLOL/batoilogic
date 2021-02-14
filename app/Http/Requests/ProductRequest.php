<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'description' => 'required',
            'price' => 'required|min:0',
            'provider' => 'required',
            'stock' => 'required|min:0',
            'active' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'description.required' => 'La descripción es obligatoria.',
            'price.required' => 'El precio es obligatorio.',
            'price.min' => 'El precio debe ser mayor que 0.',
            'provider.required' => 'El proveedor es obligatorio.',
            'stock.required' => 'El stock es obligatorio.',
            'stock.min' => 'El stock debe ser mayor que 0.',
            'active.required' => 'Se necesita conocer el estado del producto.'
        ];
    }
}
