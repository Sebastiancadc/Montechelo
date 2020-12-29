<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'email' => 'required|unique:usuario',
            'cumpleanios' => 'required',
            'password'=> 'required|min:6|max:13|confirmed',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido.',
            'name.min' => 'El Nombre debe tener minimo 3 caracteres.',
            'name.max' => 'El Nombre debe tener maximo 10 caracteres.',
            'email.required' => 'El Correo es requerido.',
            'email.unique' => 'El correo ya esta registrado.',
            'cumpleanios.required' => 'La Fecha de nacimiento es requerida.',
            'password.required' => 'La Contraseña es requerida.',
            'password.confirmed' => 'Las de Contraseña deben coincidir.',
            'password.min' => 'La Contraseña debe tener minimo 5 caracteres.',
            'password.max' => 'La Contraseña debe tener maximo 13 caracteres.',
            
            
        ];
    }
}
