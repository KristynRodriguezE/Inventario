<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductOutputRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            return [
                'quantity' => 'required|string|min:1|max:10',
                'date' => 'required|date',
                'input_type' => 'required',
            ];
    }

     public function messages()
    {
        return [
           'quantity.required' => 'La cantidad es requerida.',
           'quantity.string' => 'La cantidad debe contener solo caracteres.',
           'quantity.min' => 'La cantidad debe contener minimo 1 caracter.',
           'quantity.max' => 'La cantidad no puede exceder el maximo de 10 caracteres.',

           'date.required' => 'La fecha es requerida.',
           'date.date' => 'La fecha debe ser una fecha valida.',

           'input_type.required' => 'El tipo de entrada es requerido.',

        ];
    }
}
