<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MarkRequest extends FormRequest
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
            'mark' => 'required|string|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'mark.string' => 'El nombre de la marca debe contener solo caracteres.',
            'mark.required' => 'El nombre de la marca es requerido.',
            'mark.min' => 'El nombre de la marca debe contener minimo 5 caracteres.',
            'mark.max' => 'El nombre de la marca no puede exceder el maximo de 100 caracteres.',
        ];
    }
}
