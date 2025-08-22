<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InventaryRequest extends FormRequest
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
            'entry_day' => 'required | date',
            'current_stock' => 'required |date',
            'minimum_stock' => 'required |date',
            'current_quantity' => 'required|string|min:1|max:3',

        ];
    }
    public function messages()
    {
        return[

            'entry_day.required' => 'el dia de entrada al inventario es requerido.',

            'departure_date.required' => 'la fecha de salida del inventario es requerida.',

            'expiration_date.required' => 'la fecha de expiracion es requerida.',

            'current_quantity.required' => 'la cantidad actual es requerida.',
            'current_quantity.string' => 'la cantidad actual debe contener solo caracteres.',
            'current_quantity.min' => 'la cantidad del stock debe contener minimo 1 caracter.',
            'current_quantity.max' => 'la cantidad del stock no puede exceder el maximo de 3 caracteres.',
        ];
    }
}
