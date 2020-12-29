<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:10',
            'role' => 'required',
            'email' => 'required',
            'cumpleanios' => 'required',
            'genero' => 'required',
            'phone' => 'required',
            'area' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido.',
            'name.min' => 'El Nombre debe tener minimo 3 caracteres.',
            'name.max' => 'El Nombre debe tener maximo 10 caracteres.',
            'role.required' => 'El Rol es requerido.',
            'email.required' => 'El Correo es requerido.',
            'cumpleanios.required' => 'La Fecha de nacimiento es requerida.',
            'genero.required' => 'El Genero es requerido.',
            'phone.required' => 'El Teléfono es requerido.',
            'area.required' => 'El Área es requerida.',
        ];
    }
}
