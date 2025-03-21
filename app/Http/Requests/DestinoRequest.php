<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinoRequest extends FormRequest
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
            'nombre' => 'required|string',
            'moneda' => 'required|string',
            'salario_minimo' => 'required|numeric',
            'salario_promedio' => 'required|numeric',
            'costo_vida_promedio' => 'required|numeric',
            'aplica_exterior' => 'required|boolean',
            'requiere_estudios' => 'required|boolean',
            'requiere_idiomas' => 'required|boolean',
            'esta_disponible' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del destino es obligatorio.',
            'nombre.string' => 'El nombre del destino debe ser una cadena de texto.',

            'moneda.required' => 'La moneda es obligatoria.',
            'moneda.string' => 'La moneda debe ser una cadena de texto.',

            'salario_minimo.required' => 'El salario mínimo es obligatorio.',
            'salario_minimo.numeric' => 'El salario mínimo debe ser un número.',

            'salario_promedio.required' => 'El salario promedio es obligatorio.',
            'salario_promedio.numeric' => 'El salario promedio debe ser un número.',

            'costo_vida_promedio.required' => 'El costo de vida promedio es obligatorio.',
            'costo_vida_promedio.numeric' => 'El costo de vida promedio debe ser un número.',

            'aplica_exterior.required' => 'Debe indicar si aplica para el exterior.',
            'aplica_exterior.boolean' => 'El campo aplica exterior debe ser verdadero o falso.',

            'requiere_estudios.required' => 'Debe indicar si se requieren estudios.',
            'requiere_estudios.boolean' => 'El campo requiere estudios debe ser verdadero o falso.',

            'requiere_idiomas.required' => 'Debe indicar si se requieren idiomas.',
            'requiere_idiomas.boolean' => 'El campo requiere idiomas debe ser verdadero o falso.',

            'esta_disponible.required' => 'Debe indicar si el destino está disponible.',
            'esta_disponible.boolean' => 'El campo disponibilidad debe ser verdadero o falso.',
        ];
    }


}


