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
            'nombre' => ['required', 'regex:/^[\pL\sñÑ]+$/u'],
            'moneda' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'salario_minimo' => 'required|numeric',
            'salario_promedio' => 'required|numeric',
            'costo_vida_promedio' => 'required|numeric',
            'aplica_exterior' => 'required',
            'requiere_estudios' => 'required',
            'requiere_idiomas' => 'required',
            'dificultad_visa' => 'required|numeric',
            'esta_disponible' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del destino es obligatorio.',
            'nombre.regex' => 'El nombre del destino solo puede contener letras y espacios.',

            'moneda.required' => 'La moneda es obligatoria.',
            'moneda.regex' => 'La moneda solo puede contener letras y espacios.',

            'salario_minimo.required' => 'El salario mínimo es obligatorio.',
            'salario_minimo.numeric' => 'El salario mínimo debe ser un número.',

            'salario_promedio.required' => 'El salario promedio es obligatorio.',
            'salario_promedio.numeric' => 'El salario promedio debe ser un número.',

            'costo_vida_promedio.required' => 'El costo de vida promedio es obligatorio.',
            'costo_vida_promedio.numeric' => 'El costo de vida promedio debe ser un número.',

            'aplica_exterior.required' => 'Debe indicar si aplica para el exterior.',

            'requiere_estudios.required' => 'Debe indicar si se requieren estudios.',

            'dificultad_visa.required' => 'La dificultad de visa es obligatoria.',
            'dificultad_visa.numeric' => 'La dificultad de visa debe ser un número.',

            'requiere_idiomas.required' => 'Debe indicar si se requieren idiomas.',

            'esta_disponible.required' => 'Debe indicar si el destino está disponible.',
        ];
    }


}


