<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequisitoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'requisito' => 'required|max:200|min:10',
            'combinaciones' => 'required|array|min:1',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'requisito.required' => 'La descripción es obligatoria.',
            'requisito.min' => 'La descripción debe tener al menos 10 caracteres.',
            'requisito.max' => 'La descripción no puede tener más de 200 caracteres.',

            'combinaciones.required' => 'Debe seleccionar al menos una combinación destino-nacionalidad.',
            'combinaciones.min' => 'Debe seleccionar al menos una combinación destino-nacionalidad.',
        ];
    }
}
