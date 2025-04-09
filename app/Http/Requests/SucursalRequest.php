<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            'email' => 'required|email',
            'anio_apertura' => 'required|integer|digits:4',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre de la sucursal es obligatorio.',
            'nombre.string' => 'El nombre de la sucursal debe ser una cadena de texto.',
            'nombre.max' => 'El nombre de la sucursal no puede tener más de 255 caracteres.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'direccion.max' => 'La dirección no puede tener más de 255 caracteres.',
            'latitud.required' => 'La latitud es obligatoria.',
            'latitud.numeric' => 'La latitud debe ser un número.',
            'longitud.required' => 'La longitud es obligatoria.',
            'longitud.numeric' => 'La longitud debe ser un número.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'anio_apertura.required' => 'El año de apertura es obligatorio.',
            'anio_apertura.integer' => 'El año de apertura debe ser un número entero.',
            'anio_apertura.digits' => 'El año de apertura debe tener 4 dígitos.',
        ];
    }

}
