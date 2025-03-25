<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaRequest extends FormRequest
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
            'fecha_publicacion' => ['required', 'date'],
            'titulo' => ['required', 'string', 'max:50'],
            'subtitulo' => ['required', 'string', 'max:120'],
            'contenido' => ['required', 'string'],
            'destino_id' => ['required', 'integer'],
            'autor' => ['required', 'string', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'fecha_publicacion.required' => 'La fecha de publicación es obligatoria.',
            'fecha_publicacion.date' => 'Debe ingresar una fecha válida.',

            'titulo.required' => 'El título es obligatorio.',
            'titulo.string' => 'El título debe ser un texto.',
            'titulo.max' => 'El título no puede superar los 50 caracteres.',

            'subtitulo.required' => 'El subtítulo es obligatorio.',
            'subtitulo.string' => 'El subtítulo debe ser un texto.',
            'subtitulo.max' => 'El subtítulo no puede superar los 120 caracteres.',

            'contenido.required' => 'El contenido es obligatorio.',
            'contenido.string' => 'El contenido debe ser un texto válido.',

            'destino_id.required' => 'El destino es obligatorio.',
            'destino_id.integer' => 'El destino debe ser un número entero.',

            'autor.required' => 'El autor es obligatorio.',
            'autor.string' => 'El nombre del autor debe ser un texto.',
            'autor.max' => 'El nombre del autor no puede superar los 100 caracteres.',
        ];
    }
}
