<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupplierRequest extends FormRequest
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
            'representative_name' => 'required|string|min:5|max:255',
            'company_name' => 'required|string|min:5|max:255',
            'phone_number' => ['required|string|min:5|max:15', Rule::unique('suppliers')->ignore($this->supplier)],
            'email' => ['required', 'string', 'min:5', 'max:20',Rule::unique('students')->ignore($this->student)],
            'Physical_Address' => 'required|string|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'representative_name.required' => 'El nombre del representante es requerido.',
            'representative_name.string' => 'El nombre del representante debe contener solo caracteres.',
            'representative_name.min' => 'El nombre del representante debe contener minimo 5 caracteres.',
            'representative_name.max' => 'El nombre del representante no puede exceder el maximo de 255 caracteres.',

            'company_name.required' => 'El nombre de la empresa es requerido.',
            'company_name.string' => 'El nombre de la empresa debe contener solo caracteres.',
            'company_name.min' => 'El nombre de la empresa debe contener minimo 5 caracteres.',
            'company_name.max' => 'El nombre de la empresa no puede exceder el maximo de 255 caracteres.',

            'phone_number.required' => 'El numero de telefono es requerido.',
            'phone_number.string' => 'El numero de telefono debe contener solo caracteres.',
            'phone_number.min' => 'El numero de telefono debe contener minimo 5 caracteres.',
            'phone_number.max' => 'El numero de telefono no puede exceder el maximo de 15 caracteres.',

            'email.required' => 'El correo electronico es requerido.',
            'email.string' => 'El correo electronico debe contener solo caracteres.',
            'email.min' => 'El correo electronico debe contener minimo 5 caracteres.',
            'email.max' => 'El correo electronico no puede exceder el maximo de 20 caracteres.',

            'Physical_Address.required' => 'La direccion es requerida.',
            'Physical_Address.string' => 'La direccion debe contener solo caracteres.',
            'Physical_Address.min' => 'La direccion debe contener minimo 5 caracteres.',
            'Physical_Address.max' => 'La direccion no puede exceder el maximo de 45 caracteres.',
        ];
    }
}
