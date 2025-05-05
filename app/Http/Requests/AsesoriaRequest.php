<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsesoriaRequest extends FormRequest
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
            'descripcion' => 'required|string|max:1000',
            'fecha_solicitud' => 'required|date',
            'quiere_postulacion' => 'required|boolean',
            'quiere_seguro' => 'required|boolean',
            'quiere_asistencia_ilimitada' => 'required|boolean',
            'usuario_id' => 'exists:usuarios,id', 
            'nacionalidad_id' => 'required|',
            'destino_id' => 'required|'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser un texto.',
            'descripcion.max' => 'La descripción no puede tener más de 1000 caracteres.',

            'fecha_solicitud.required' => 'La fecha de solicitud es obligatoria.',
            'fecha_solicitud.date' => 'La fecha de solicitud debe ser una fecha válida.',

            'quiere_postulacion.required' => 'Debe indicar si quiere postulación.',
            'quiere_postulacion.boolean' => 'El campo de postulación debe ser verdadero o falso.',

            'quiere_seguro.required' => 'Debe indicar si quiere seguro.',
            'quiere_seguro.boolean' => 'El campo de seguro debe ser verdadero o falso.',

            'quiere_asistencia_ilimitada.required' => 'Debe indicar si quiere asistencia ilimitada.',
            'quiere_asistencia_ilimitada.boolean' => 'El campo de asistencia ilimitada debe ser verdadero o falso.',

            'usuario_id.exists' => 'El usuario no existe en la base de datos.',

            'nacionalidad_id.required' => 'La nacionalidad es obligatoria.',
            'destino_id.required' => 'El destino es obligatorio.'
        ];
    }
}
