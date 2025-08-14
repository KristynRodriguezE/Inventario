<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductEntryRequest extends FormRequest
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
            'entry_day' => 'required',
            'departure_date' => 'required',
            'expiration_date' => 'required',
            'amount' => 'required|string|min:1|max:3',

            'product_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'entry_day.required' => 'El día de entrada al inventario es requerido.',

            'departure_date.required' => 'La fecha de salida del inventario es requerida.',

            'expiration_date.required' => 'La fecha de expiración es requerida.',

            'amount.required' => 'La cantidad del stock es requerida.',
            'amount.string' => 'La cantidad del stock debe contener solo caracteres.',
            'amount.min' => 'La cantidad del stock debe contener mínimo 1 caracter.',
            'amount.max' => 'La cantidad del stock no puede exceder los 3 caracteres.',
        ];
    }
}
