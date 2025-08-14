<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            'category' => 'required|string|min:5|max:100',
            'category_num' => ['required', 'string', 'min:5', 'max:20', Rule::unique('careers')->ignore($this->career)],
        ];
    }
    public function messages()
    {
        return[
            'category.string' => 'El nombrede la categoria debe contener solo caracteres.',
            'category.required' => 'El nombre de la categoria es requerido.',
            'category.min' => 'El nombre de la categoria debe contener minimo 5 caracteres.',
            'category.max' => 'El nombre de la caegoria no puede exceder el maximo de 100 caracteres.',

            'category_num.required' => 'El modo de la carrera es requerido.',
            'category_num.string' => 'El modo de la carrera debe contener solo caracteres.',
            'category_num.min' => 'El modo de la carrera debe contener minimo 10 caracteres.',
            'category_num.max' => 'El modo de la carrera no puede exceder el maximo de 45 caracteres.',

        ];
    }
}
