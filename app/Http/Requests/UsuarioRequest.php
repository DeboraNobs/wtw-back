<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'rol' => 'required',
            'password' => 'required|min:9|regex:/[A-Z]/|regex:/\d/',
            'fecha_nacimiento' => 'required',
            'nacionalidad_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellidos.required' => 'El apellido es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Este correo electrónico no tiene formato válido.',
            'rol.required' => 'El rol es obligatorio.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 9 caracteres.',
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula y un número.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'nacionalidad_id.required' => 'La nacionalidad es obligatoria.',
            'nacionalidad_id.numeric' => 'La nacionalidad debe ser un número válido.',
        ];
    }


}
