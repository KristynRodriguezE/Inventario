<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:100',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string',
            'code' => ['required', 'string', 'min:5', 'max:20', Rule::unique('products')->ignore($this->product)],
            'type' => 'required|string|max:40',
            'unit_measurement' => 'required|string|max:40',
            'expiration_date' => 'nullable|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del producto es requerido.',
            'name.string' => 'El nombre del producto debe contener solo caracteres.',
            'name.min' => 'El nombre del producto debe contener minimo 5 caracteres.',
            'name.max' => 'El nombre del producto no puede exceder el maximo de 100 caracteres.',

            'price.required' => 'El precio del producto es requerido.',
            'price.numeric' => 'El precio del producto debe ser un numero.',
            'price.min' => 'El precio del producto no puede ser negativo.',

            'status.required' => 'El estado del producto es requerido.',
            'status.string' => 'El estado del producto debe contener solo caracteres.',

            'code.required' => 'El codigo del producto es requerido.',
            'code.string' => 'El codigo del producto debe contener solo caracteres.',
            'code.min' => 'El codigo del producto debe contener minimo 5 caracteres.',
            'code.max' => 'El codigo del producto no puede exceder el maximo de 20 caracteres.',

            'type.required' => 'El tipo de producto es requerido.',
            'type.string' => 'El tipo de producto debe contener solo caracteres.',
            'type.max' => 'El tipo de producto no puede exceder el maximo de 40 caracteres.',

            'unit_measurement.required' => 'La unidad de medida del producto es requerida.',
            'unit_measurement.string' => 'La unidad de medida del producto debe contener solo caracteres.',
            'unit_measurement.max' => 'La unidad de medida del producto no puede exceder el maximo de 40 caracteres.',


        ];
    }
}
