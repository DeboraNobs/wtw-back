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
            'nombre' => ['required'],
            'apellidos' => ['required'],
            'email' => 'required|email|unique:usuarios,email',
            // 'rol' => 'required',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*\d).{9,}$/',
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
            'email.unique' => 'El correo electrónico ya está registrado. Ingrese uno nuevo',

            // 'rol.required' => 'El rol es obligatorio.',

            'password.required' => 'La contraseña es obligatoria.',
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, un número y debe tener al menos 9 caracteres.',

            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',

            'nacionalidad_id.required' => 'La nacionalidad es obligatoria.',
            'nacionalidad_id.numeric' => 'La nacionalidad debe ser un número válido.',
        ];
    }


}
