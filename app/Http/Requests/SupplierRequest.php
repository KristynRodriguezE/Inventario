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
            'duration' => 'required|string|min:5|max:45',
            'specialty' => 'required|string|min:5|max:45',
        ];
    }
}
